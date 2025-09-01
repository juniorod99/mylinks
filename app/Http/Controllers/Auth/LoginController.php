<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function login(LoginRequest $request)
    {
        if ($request->tryLogin()) {
            return to_route('dashboard');
        }

        return back()->with(['message' => 'Não deu certo!']);
    }
}
