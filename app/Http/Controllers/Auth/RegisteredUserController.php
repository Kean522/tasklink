<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {

        $user = User::where('email', $request->input('email'))->first();

        if($user) {
            Auth::login($user);
            return redirect(RouteServiceProvider::HOME);
        }
          $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

       

        if ($request->hasFile('archivo')) {
                $fotoPerfil = $request->file('archivo');
                $rutaImagen = $fotoPerfil->store('profiles', 'public');
                // $fotoPerfil->move(public_path('profiles'), $fotoPerfil->getClientOriginalName());
            } else {
                $rutaImagen = null; 
            }

        // if ($user) {
        //         $user->name = $request->input('name'); 
        //         $user->password = Hash::make($request->input('password'));
        //         if ($rutaImagen) {
        //             $user->profile_photo = $rutaImagen;
        //         }
        //         $user->save(); 
        //     } else {
                $user = User::create([
                    'name' => $request->input('name'),
                    'email' => $request->input('email'),
                    'password' => Hash::make($request->input('password')),
                    'profile_photo'=> $rutaImagen
                ]);
           // }

       
        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
