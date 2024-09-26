<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Validation\ValidationException;

class PasswordResetController extends Controller
{
    // Mostrar el formulario para solicitar un enlace de restablecimiento de contraseña
    public function showLinkRequestForm()
    {
        return view('auth.passwords.email'); // Asegúrate de tener esta vista
    }

    // Enviar enlace de restablecimiento de contraseña
    public function sendResetLinkEmail(Request $request)
    {
        $request->validate(['email' => 'required|email']);

        $response = Password::sendResetLink($request->only('email'));

        if ($response == Password::RESET_LINK_SENT) {
            return back()->with('status', trans($response));
        }

        throw ValidationException::withMessages(['email' => trans($response)]);
    }

    // Mostrar el formulario para restablecer la contraseña
    public function showResetForm(Request $request, $token = null)
    {
        return view('auth.passwords.reset')->with(['token' => $token, 'email' => $request->email]);
    }

    // Restablecer la contraseña
    public function reset(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|confirmed|min:6',
            'token' => 'required',
        ]);

        $response = Password::reset($request->only('email', 'password', 'password_confirmation', 'token'), function ($user, $password) {
            $user->password = Hash::make($password);
            $user->save();
        });

        if ($response == Password::PASSWORD_RESET) {
            return redirect()->route('login')->with('status', trans($response));
        }

        return back()->withInput($request->only('email'))
                     ->withErrors(['email' => trans($response)]);
    }
}
