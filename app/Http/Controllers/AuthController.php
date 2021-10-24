<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(Request $request) {
//        if ($request->isMethod('GET'))
            return view('adminlte.register2');

//        $request->validate([
//            'full_name'
//        ]);
    }
}
