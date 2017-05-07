<?php

namespace App\Providers;
use App\Usuario;
use App\Alerta;
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

        view()->composer('alertas.index', function($view){
            $alertas = Alerta::get();
            $view->with('alertas', $alertas);
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
