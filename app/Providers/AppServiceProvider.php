<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Mail\WelcomeEmail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot()
    {

        Route::post('/send-welcome-email', function () {
            $user = Auth::user(); // Obtén el usuario actualmente autenticado
            Mail::to($user->email)->send(new WelcomeEmail($user)); // Envía el correo electrónico de bienvenida

            return redirect()->back()->with('status', 'Correo electrónico de bienvenida enviado');
        })->middleware(['auth'])->name('send-welcome-email');
    }
    
}
