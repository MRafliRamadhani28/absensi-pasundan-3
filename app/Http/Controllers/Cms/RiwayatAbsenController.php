<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use App\Models\Absen;
use App\Models\Guru;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RiwayatAbsenController extends Controller
{
    public function __construct()
    {
        $this->middleware(['cms.access:absensi,hak-akses']);
        $this->middleware(['cms.access:absensi,create-absensi'])->only(['store']);
    }

    public function index()
    {
        $listDataAbsensi = Absen::select([
            "users.name",
            "absens.*",
        ])
        ->where('tgl', date('Y-m-d'))
        ->leftJoin('users', 'users.id', 'absens.user_id')
        ->orderByDesc('created_at')
        ->paginate(10);

        $listUser = User::select([
            "users.id",
            "users.name",
        ])
        ->whereNotNull('user_level_id')
        ->where('flag_active', 1)
        ->get();

        $totalData = $listDataAbsensi->total();
        $firstData = ($listDataAbsensi->currentPage() - 1) * $listDataAbsensi->perPage();
        $lastData  = ($firstData + $listDataAbsensi->perPage()) > $totalData ? $totalData : ($firstData + $listDataAbsensi->perPage());

        $paginationData = [
            'first' => $firstData,
            'last'  => $lastData,
            'total' => $totalData,
            'prev_page_url' => $listDataAbsensi->previousPageUrl(),
            'next_page_url' => $listDataAbsensi->nextPageUrl(),
        ];
        
        return view('cms.riwayat-absen.index', [
            'dataAbsensi'       => $listDataAbsensi,
            'paginationData'    => $paginationData,
            'listUser'          => $listUser,
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id'   => 'required',
            'status'    => 'required|in:izin,sakit,alpa',
        ]);

        if (!User::where('id', $request->user_id)->exists()) {
            return response()->json([
                'message' => "User tidak ditemukan"
            ], 500);
        }

        try {
            Absen::insert([
                'user_id'   => $request->user_id,
                'tgl'       => date('Y-m-d'),
                'status'    => $request->status,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'message' => "Database Error",
                'debug'   => $e->getMessage()
            ], 500);
        }

        return response()->json([
            'status' => "OK"
        ]);
    }
}
