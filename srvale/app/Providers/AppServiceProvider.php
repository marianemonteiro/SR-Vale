<?php

namespace App\Providers;

use App\Usuario;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('usuarios.index', function($view){
            $usuarios = Usuario::get();
            $view->with('usuarios', $usuarios);
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
