<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class LoginController extends Controller
{
    public function loginForm()
    {
    return view('auth.login');
    }
    public function login(Request $request)
    {
    $credenciales = $request->only('login', 'password');
    if (Auth::attempt($credenciales))
    {
    // Autenticación exitosa
    return redirect()->intended(route('libros.index'));
    } else {
    $error = 'Usuario incorrecto';
    return view('auth.login', compact('error'));
    }
    }
}
