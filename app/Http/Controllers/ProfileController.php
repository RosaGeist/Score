<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    // Mostrar el perfil del usuario
    public function show()
    {
        $user = Auth::user();
        return view('auth.profile.show', compact('user')); // Asegúrate de tener esta vista
    }

    // Actualizar el perfil del usuario
    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'nullable|string|max:255',
            // Agrega validaciones para otros campos aquí si es necesario
        ]);

        $user = Auth::user();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        // Agrega otros campos aquí si es necesario
        $user->save();

        return redirect()->route('profile.show')->with('status', 'Perfil actualizado exitosamente.');
    }
}
