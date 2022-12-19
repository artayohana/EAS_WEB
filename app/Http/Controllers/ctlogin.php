<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\User;
use Illuminate\Http\Request;

class ctlogin extends Controller
{
   public function index(){
    return view ('form.login');
    
   }

   public function proses(Request $request){
      if(Auth::attempt($request->only('email','password'))){
         return redirect('/dashboard');
      }
      return redirect('/dashboard');
   }

   public function logout(){
      return redirect('/login');
   }

}
