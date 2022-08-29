<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(){
        //会員登録画面を表示
        return view('register');
    }
    public function store(Request $request){
        $request->validate([
            'name'=>'required',
            'password'=>'required',
            'instrument'=>'required'
        ]);
        
    }
}
