<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use Auth;

class LoginController extends Controller
{
    public function postlogin (Request $request){
    //dd($request->all());
    if (Auth::attempt($request->only('email', 'password'))){
        return redirect('beranda');
    }
    return redirect ('beranda');
    }

    public function postlogout (Request $request){
        //dd($request->all());
        Auth::logout();
        return redirect ('login');
}
}