<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataController extends Controller
{
    public function form() {
        return view("form");
    }

    public function proses(Request $request) {
        $nama = $request->input('nama');
        $umur = $request->input('umur');
        $alamat = $request->input('alamat');
        $agama = $request->input('agama');
        $jenis_kelamin = $request->input('jenis_kelamin');

        return view('hasil', compact('nama', 'umur', 'alamat', 'agama', 'jenis_kelamin'));
    }
}
