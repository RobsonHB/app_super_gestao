<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     //return view('welcome');
//     return 'Olá mundo';

// });

Route::get('/', 'PrincipalController@principal')->name('site.index');
Route::get('/sobre-nos', 'SobreNosController@sobreNos')->name('site.sobrenos');
Route::get('/contato', 'ContatoController@contato')->name('site.contato');
Route::get('/login',        function(){ return 'Login';})->name('site.login');

Route::prefix('/app')->group(function(){

    Route::get('/clientes',     function(){ return 'Clientes';})->name('app.clientes');
    Route::get('/fornecedores', 'FornecedorController@index')->name('app.fornecedores');
    Route::get('/produtos',     function(){ return 'Produtos';})->name('app.produtos');

});

// route::get('/rota1', function(){

//     echo 'Rota 1';

// })->name('site.rota1');

// route::get('/rota2', function(){
//     //iremos ser redirecionado para a rota 1
//     //echo 'Rota 2';
//     return redirect()->route('site.rota1');
    
// })->name('site.rota2');

//Route::redirect('/rota2', '/rota1');


Route::get('/teste/{p1}/{p2}', 'TesteController@teste')->name('teste');


//ROTA DE CONTINGÊNCIA
Route::fallback(function(){

    echo 'A rota acessada não existe. <a href="'.route('site.index').'">Clique aqui</a> para ser redirecionado a página inicial.';

    

});


// //Utilizando a rota com parametros
// Route::get('/contato/{nome}/{categoria}/{assunto}/{mensagem?}', function(string $nome, string $categoria, string $assunto, string $mensagem = 'mensagem não informada'){
//     echo "Estamos aqui: {$nome} -  {$categoria} - {$assunto} - {$mensagem}";
// });

//Utilizando a rota com parametros
// Route::get(
//         '/contato/{nome}/{categoria_id}',
//         function(
//                     string $nome      = 'Desconhecido',
//                     int $categoria_id = 1 // 1 - Informação
//                 ){
//                     echo "Estamos aqui: $nome -  $categoria_id";
// })->where('categoria_id', '[0-9]+')->where('nome', '[A-Za-z]+');
