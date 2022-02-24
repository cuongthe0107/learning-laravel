<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    public function __construct()
    {
        $this->middleware = ['guest'];
    }

    public function login(Request $request){
        if(Auth::attempt($request->all())){
            return redirect()->route('home');
        } else {
            return redirect()->back();
        }
    }
}
