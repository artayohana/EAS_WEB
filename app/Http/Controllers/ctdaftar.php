<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ctdaftar extends Controller
{
    public function index (){
        return view ('form.regis');
    }

    public function prosesdaftar (Request $request){
        // untuk coba awal 
        //return $request()->all();

        $validasi = $request->validate([
            'name' => 'required|max:255',
            'username' => ['required','min:3','max:255', 'unique:users'],
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255'
        ]);

        //dd('berhasil')
        User::create($validasi);

        return redirect('/login')->with('berhasil', 'Pendaftaran akun kamu berhasil, ayo login !!');
    }
}
