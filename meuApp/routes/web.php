<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;
Route::resource('produtos', ProdutoController::class);


//grupo de rotas 

// Route::group([
//     'prefix' => 'admin',
//     'as' => 'admin.'
// ], function(){


    
//     Route::get('dashboard', function(){
//     return "dashboard";
// })->name('dashboard');

//     Route::get('users', function(){
//     return "users";
// })->name('users');

//     Route::get('clientes', function(){
//     return "clientes";
// })->name('clientes');

// });



// Route::any('/any', function(){
//     return "Permite todo tipo de acesso";
// });


// Route::match(['put', 'delete'],'/match', function(){
//     return "apenas autorizados conseguem acessar";
// });

// //rota get passando parametros

// Route::get('/produto/{id}/{item}', function($id, $item){
//     return "O id dessa pesquisa é e o item desejado é " .  $id . " " . $item;
// });

// //view e redirect 

// Route::redirect('/sobre', '/empresa');
// Route::view('/empresa', 'site/empresa');


// //rotas nomeadas 

// Route::get('/news', function(){
//     return view('news');
// })->name('noticias');

// Route::get('/novidades', function(){
//     return redirect()->route('noticias');
// });