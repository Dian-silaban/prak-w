<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function profile($nama = "Dian Prinatama Silaban", $kelas = "B", $npm = "2217051137")
    {
        $data = [
            'nama' => $nama,
            'kelas' => $kelas,
            'npm' => $npm,
           ];
           

        return view('profile', $data);
    }

    public function create()
    { 
        
        return view('create_user'); 
    }

    public function store(Request $request)
    {
        $data = [
            'nama' => $request->input('nama'),
            'kelas' => $request->input('kelas'),
            'npm' => $request->input('npm'),
        ];

        return view('profile', $data);
    }
}