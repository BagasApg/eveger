<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function index(){
        return view('register');
    }

    public function store(Request $request){
        $request->validate([
            'username' => 'required',
            'password' => 'required|min:5'
        ]);

        // dd($request->password);

        User::create($request->all());

        if(Auth::attempt(['username' => $request->username, 'password' => $request->password])){
            $request->session()->regenerate();

            return redirect()->intended('/');
        }
    }
}
