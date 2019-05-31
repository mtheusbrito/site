<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function index()
    {
        return view('login.index');
    }
    public function login(Request $req)
    {
        $dados = $req->all();

        if (Auth::attempt(['email' => $dados['email'], 'password' => $dados['password']])) {
            return redirect()->route('adm.index');
        }
        return redirect()->route('login');
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
