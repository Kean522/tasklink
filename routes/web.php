<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\TareaController;
use App\Http\Controllers\ProjectController;
use App\Models\User;
use App\Models\Project;



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
    $usuariosDisponibles=User::all();
    $proyectosDisponibles=Project::all();
    return view('index',compact('usuariosDisponibles','proyectosDisponibles'));
});
Route::get('/task', function () {
    $usuariosDisponibles=User::all();
    return view('task',compact('usuariosDisponibles'));
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
    //Route::get('tarea/{funcion}', [TareaController::class, 'index'])->name('tarea');
    Route::post('/tarea/crear', [TareaController::class, 'create'])->name('tarea.create');
    Route::post('/proyecto/crear', [ProjectController::class, 'create'])->name('project.create');
    Route::post('/proyecto/eliminar', [ProjectController::class, 'delete'])->name('project.delete');
    //Route::get('/proyecto/{projectId}/tasks', [TaskController::class, 'index'])->name('projects.tasks.index');
});





// Route::post('/login', [LoginController::class, 'login'])->name('login');




// Route::post('/login', [AuthenticatedSessionController::class, 'store'])
//             ->middleware('guest');


// Route::get('/register', [RegisteredUserController::class, 'create'])
//             ->middleware('guest')
//             ->name('register');




require __DIR__.'/auth.php';