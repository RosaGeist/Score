<?php

use App\Providers\RouteServiceProvider;
use Laravel\Fortify\Features;

return [

    /*
    |--------------------------------------------------------------------------
    | Fortify Guard
    |--------------------------------------------------------------------------
    */

    'guard' => 'web',

    /*
    |--------------------------------------------------------------------------
    | Fortify Password Broker
    |--------------------------------------------------------------------------
    */

    'passwords' => 'users',

    /*
    |--------------------------------------------------------------------------
    | Username / Email
    |--------------------------------------------------------------------------
    */

    'username' => 'email',

    'email' => 'email',

    /*
    |--------------------------------------------------------------------------
    | Lowercase Usernames
    |--------------------------------------------------------------------------
    */

    'lowercase_usernames' => true,

    /*
    |--------------------------------------------------------------------------
    | Home Path
    |--------------------------------------------------------------------------
    */

    'home' => RouteServiceProvider::HOME,

    /*
    |--------------------------------------------------------------------------
    | Fortify Routes Prefix / Subdomain
    |--------------------------------------------------------------------------
    */

    'prefix' => '',

    'domain' => null,

    /*
    |--------------------------------------------------------------------------
    | Fortify Routes Middleware
    |--------------------------------------------------------------------------
    */

    'middleware' => ['web'],

    /*
    |--------------------------------------------------------------------------
    | Rate Limiting
    |--------------------------------------------------------------------------
    */

    'limiters' => [
        'login' => 'login',
        'two-factor' => 'two-factor',
    ],

    /*
    |--------------------------------------------------------------------------
    | Register View Routes
    |--------------------------------------------------------------------------
    */

    'views' => true,

    /*
    |--------------------------------------------------------------------------
    | Features
    |--------------------------------------------------------------------------
    |
    | Here we enable the features you want to use in your application.
    |
    */

    'features' => [
        Features::registration(), // Habilitar registro de usuarios
        Features::resetPasswords(), // Habilitar recuperación de contraseñas
        // Features::emailVerification(), // Habilitar verificación de correo electrónico (opcional)
        Features::updateProfileInformation(), // Habilitar actualización de información del perfil
        Features::updatePasswords(), // Habilitar actualización de contraseñas
        Features::twoFactorAuthentication([ // Habilitar autenticación multifactor
            'confirm' => true, // Confirmación para la autenticación de dos factores
            'confirmPassword' => true, // Confirmar contraseña antes de activar la MFA
            // 'window' => 0, // Configuración opcional para la ventana de confirmación
        ]),
    ],

];

