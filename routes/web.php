<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;





/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('login');
});
Route::get('/logeado', function () {
    return view('login');
})->name('logeado');

Route::get('/registrar', function () {
    return view('register');
})->name('registrar');

Route::get('/index', function () {
    return view('index');
});
Route::get('/task', function () {
    return view('task');
});
Route::get('/app', function () {
    return view('layouts.app');
});

Route::get('/registrar_usuario', function () {
    Route::get('/profile', [ProfileController::class, 'edit']);
})->name('registrar_usuario');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    
});





// Route::post('/login', [LoginController::class, 'login'])->name('login');




// Route::post('/login', [AuthenticatedSessionController::class, 'store'])
//             ->middleware('guest');


// Route::get('/register', [RegisteredUserController::class, 'create'])
//             ->middleware('guest')
//             ->name('register');




require __DIR__.'/auth.php';