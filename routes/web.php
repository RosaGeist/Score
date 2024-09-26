<?php 

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;

/*
|-------------------------------------------------------------------------- 
| Web Routes 
|-------------------------------------------------------------------------- 
| 
| Aquí es donde puedes registrar rutas web para tu aplicación. Estas 
| rutas son cargadas por el RouteServiceProvider dentro de un grupo que 
| contiene el grupo de middleware "web". ¡Ahora crea algo grandioso! 
| 
*/

// Ruta principal
Route::get('/', function () {
    return view('welcome');
});

// Ruta del dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// Autenticación: Login y Signup
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::get('/register', [AuthController::class, 'showSignupForm'])->name('register');

// Ruta para manejar el registro
Route::post('/register', [AuthController::class, 'register'])->name('register.post');
