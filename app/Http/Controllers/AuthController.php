<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function showSignupForm()
    {
        return view('auth.register'); // Asegúrate de que esto sea 'auth.register'
    }

    public function register(Request $request)
    {
        // Aquí va la lógica para manejar el registro
    }
}
