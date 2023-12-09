<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use App\Models\Guru;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    public function __construct()
    {
        $this->middleware(['cms.access:master-guru,hak-akses']);
    }

    public function index()
    {
        return view('cms.master-guru.index');
    }

    public function detail($id)
    {
        //
    }

    public function edit(Request $request)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
