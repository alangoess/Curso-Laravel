<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Categoria;

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
    public function boot(): void
    {
        $categoriasMenu = Categoria::all(); //a variavel vai receber todas as categorias do banco de dados
        view()->share('categoriasMenu', $categoriasMenu ); //vai compartilhar na tela para todas as views os dados
    }
}
