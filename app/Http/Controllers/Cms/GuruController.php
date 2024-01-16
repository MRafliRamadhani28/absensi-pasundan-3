<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use App\Models\Guru;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GuruController extends Controller
{
    public function __construct()
    {
        $this->middleware(['cms.access:master-guru,hak-akses']);
    }

    public function index()
    {
        $listDataGuru = Guru::orderBy('nama')->paginate(10);

        $totalData = $listDataGuru->total();
        $firstData = ($listDataGuru->currentPage() - 1) * $listDataGuru->perPage();
        $lastData  = ($firstData + $listDataGuru->perPage()) > $totalData ? $totalData : ($firstData + $listDataGuru->perPage());

        $paginationData = [
            'first' => $firstData,
            'last'  => $lastData,
            'total' => $totalData,
            'prev_page_url' => $listDataGuru->previousPageUrl(),
            'next_page_url' => $listDataGuru->nextPageUrl(),
        ];
        
        return view('cms.master-guru.index', [
            'dataGuru'          => $listDataGuru,
            'paginationData'    => $paginationData,
        ]);
    }

    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'nip'   => 'required',
            'nama'  => 'required|string',
            'jenis_kelamin'  => 'required|in:l,p',
            'tgl_lahir'  => 'nullable|date',
            'no_telp'  => 'nullable|string',
            'email'  => 'required|email|unique:guru',
            'alamat'  => 'nullable|string',
        ]);

        if (Guru::where('nip', $request->nip)->exists()) {
            return response()->json([
                'message' => "NIP sudah terdaftar"
            ], 500);
        }

        try {
            Guru::insert([
                'nip'           => $request->nip ?? null,
                'nama'          => $request->nama ?? null,
                'jenis_kelamin' => $request->jenis_kelamin ?? null,
                'tgl_lahir'     => $request->tgl_lahir ?? '2002-11-28',
                'no_telp'       => $request->no_telp ?? null,
                'email'         => $request->email ?? null,
                'alamat'        => $request->alamat ?? null,
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

    public function detail($id)
    {
        $guruData = Guru::where('id', $id)->first();

        if (empty($guruData)) {
            return response()->json([
                'status'  => "ERROR",
                'message' => "Data tidak ditemukan"
            ]);
        }

        return response()->json([
            'status'  => "OK",
            'results' => $guruData
        ]);
    }

    public function edit(Request $request)
    {
        //
    }

    public function delete($id)
    {
        try {
            Guru::where('id', $id)->delete();
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
