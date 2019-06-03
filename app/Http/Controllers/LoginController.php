<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Validators\UserValidator;
use App\Repositories\UserRepository;
use Exception;

class LoginController extends Controller

{
    protected $repository;
    protected $validator;

    public function __construct(UserRepository $repository, UserValidator $validator)
    {
        $this->repository = $repository;
        $this->validator = $validator;
    }
    //
    public function index()
    {
        return view('login.index');
    }
    public function login(Request $req)
    {
        try {

            $data = [
                'email' => $req->get('email'),
                'password' => $req->get('password')
            ];

            $user = $this->repository->findWhere(['email' => ($data['email'])])->first();

            if (!$user)
                return back()->with('error', 'Email invalido');


            if (!Auth::attempt($data, false))
                return back()->with('error', 'Senha invalida');



            return redirect()->route('adm.index');
        } catch (Exception $e) {

            return back()->with('error', $e->getMessage());
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
