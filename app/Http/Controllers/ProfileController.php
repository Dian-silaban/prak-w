<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
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
    
}