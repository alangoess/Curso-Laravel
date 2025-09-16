<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Produto;

class SiteController extends Controller
{
      public function index()
    {
        $produtos = Produto::paginate(3);
        //return dd($produtos); // para debugar os produtos
        return view('site.home', compact('produtos'));
    }
}
