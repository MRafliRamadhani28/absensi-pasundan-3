<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use App\Models\Absen;
use DateTime;
use DateTimeZone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AbsenController extends Controller
{
    public function index()
    {
        $user       = Auth::user();
        $userAbsen  = Absen::where('user_id', $user->id)->where('tgl', date('Y-m-d'))->first();

        return view('absen', [
            'user'      => $user,
            'userAbsen' => $userAbsen,
        ]);
    }
    public function absen(Request $request)
    {
        if ($request->lat == null && $request->lng == null) {
            return response()->json([
                'status'  => 'error',
                'message' => 'Lokasi tidak ditemukan'
            ]);
        }

        $user       = Auth::user();
        $timezone   = 'Asia/Jakarta';
        $date       = new DateTime('now', new DateTimeZone($timezone)); 
        $tanggal    = $date->format('Y-m-d');
        $localtime  = $date->format('H:i:s');

        $koord = (object) [
            'latitude'  => config('koordinate.latitude'),
            'longitude' => config('koordinate.longitude'),
        ];

        $jarak = $this->distance($request->lat, $request->lng, $koord->latitude, $koord->longitude, "K"); // <-- dihitung menggunakan satuan kilometer

        $userAbsen = Absen::where('user_id', '=', $user->id)->where('tgl', $tanggal)->first();

        if($userAbsen) {
            return response()->json([
                'status'  => 'error',
                'message' => 'Sudah melakukan absensi masuk'
            ]);
        } else {
            if($jarak > 0.05) {
                return response()->json([
                    'status'  => 'error',
                    'message' => 'Jarak anda jauh dari sekolah!'
                ]);
            } else {
                if (date('H:i:s', strtotime($localtime)) < '08:00:00') {
                    Absen::create([
                        'user_id'       => $user->id,
                        'tgl'           => $tanggal,
                        'jam_masuk'     => $localtime,
                        'lokasi_absen'  => $request->lat . ',' . $request->lng,
                        'created_at'    => $date,
                    ]);

                    return response()->json([
                        'status'  => 'OK',
                        'message' => 'Berhasil melakukan absen masuk'
                    ]);
                } else {
                    return response()->json([
                        'status'  => 'error',
                        'message' => 'Waktu absen masuk sudah lewat'
                    ]);
                }
            }
        }
    }

    public function absenKeluar(Request $request)
    {
        if ($request->lat == null && $request->lng == null) {
            return response()->json([
                'status'  => 'error',
                'message' => 'Lokasi tidak ditemukan'
            ]);
        }

        $user       = Auth::user();
        $timezone   = 'Asia/Jakarta';
        $date       = new DateTime('now', new DateTimeZone($timezone)); 
        $tanggal    = $date->format('Y-m-d');
        $localtime  = $date->format('H:i:s');

        $koord = (object) [
            'latitude'  => config('koordinate.latitude'),
            'longitude' => config('koordinate.longitude'),
        ];

        $jarak = $this->distance($request->lat, $request->lng, $koord->latitude, $koord->longitude, "K"); // <-- dihitung menggunakan satuan kilometer

        $userAbsen = Absen::where('user_id', '=', $user->id)->where('tgl', '=', $tanggal)->where('jam_keluar', '!=', null)->first();

        if($userAbsen) {
            return response()->json([
                'status'  => 'error',
                'message' => 'Terima kasih, datang kembali besok'
            ]);
        } else {
            if($jarak > 0.05) {
                return response()->json([
                    'status'  => 'error',
                    'message' => 'Jarak anda jauh dari sekolah!'
                ]);
            } else {
                if (date('H:i:s', strtotime($localtime)) < '15:00:00') {
                    Absen::where('user_id', $user->id)->where('tgl', $tanggal)->update([
                        'jam_keluar'    => $localtime,
                        'lokasi_absen'  => $request->lat . ',' . $request->lng,
                        'updated_at'    => $date,
                    ]);

                    return response()->json([
                        'status'  => 'OK',
                        'message' => 'Berhasil melakukan absen keluar'
                    ]);
                } else {
                    return response()->json([
                        'status'  => 'error',
                        'message' => 'Waktu absen keluar sudah lewat'
                    ]);
                }
            }
        }
    }

    public function distance($lat1, $lon1, $lat2, $lon2, $unit)
    {
        if (($lat1 == $lat2) && ($lon1 == $lon2)) {
            return 0;
        } else {
            $theta = $lon1 - $lon2;
            $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) +  cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
            $dist = acos($dist);
            $dist = rad2deg($dist);
            $miles = $dist * 60 * 1.1515;
            $unit = strtoupper($unit);

            if ($unit == "K") {
                return ($miles * 1.609344);
            } else if ($unit == "N") {
                return ($miles * 0.8684);
            } else {
                return $miles;
            }
        }
    }
}
