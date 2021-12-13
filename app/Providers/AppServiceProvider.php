<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('*', function($view){
            if (auth()->user()){
                $view->with('MenuProvider', \Illuminate\Support\Facades\DB::select('select * from menu inner join menu_rol on menu.id_menu = menu_rol.id_menu where id_rol = '.auth()->user()->id_rol));
            }
            $view->with('UsuarioProvider', auth()->user());
        });
    }
}
