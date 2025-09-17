<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Produto;
use \App\Models\Categoria;


class SiteController extends Controller
{
      public function index()
    {
        $produtos = Produto::paginate(3); //cria uma variavel para receber os itens da tabela produto
        //return dd($produtos); // para debugar os produtos
        return view('site.home', compact('produtos'));
    }

    public function details($slug)
    {
       $produto = Produto::where('slug', $slug)->first(); //cria uma variavel de um produto para receber o slug de apenas um item da  tabela

       return view('site.details', compact('produto'));
    }

      public function categoria($id)
    {
       $categoria = Categoria::find($id); //variavel recebe dados da tabela categoria e usa o metodo find para encontrar um id da tabela categoria
       $produtos = Produto::where('id_categoria', $id)->paginate(3); //variavel produtos recebe dados de id_categoria e referencia com o id da tabela categoria

       return view('site.categoria', compact('produtos', 'categoria'));
    }
}
