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

/* DEFAULT

Route::get('/', function () {
    return view('welcome');

    
});

*/

/* ROTAS

Route::get('/sobre-nos', function () {
    //return view('welcome');

    return 'Sobre nós';
});

Route::get('/contato', function () {
    //return view('welcome');

    return 'Contato';
});
*/

/* CRIANDO ROTAS

Route::get('/','PrincipalController@principal');
Route::get('/sobrenos','SobreNosController@sobrenos');
Route::get('/contato','ContatoController@contato');
*/

/* PASSANDO PARAMETROS NA ROTA 

    ? - parametreo opcional

    Route::get('/contato/{nome}/{sobrenome?}',function(string $nome, string $sobrenome = 'Sobrenome nao informado'){
        echo 'Estamos aqui :'.$nome.' - '.$sobrenome;
    });

       
Route::get('/teste/{vl_1}/{vl_2}','TesteController@teste')->name('teste');
    
*/




/* TRATANDO PARAMETROS COM EXPRESSOES REGULARES 

Route::get('/contato/{nome}/{categoria_id}',function(string $nome ='Desconhecido',int $categoria_id=1){
   
    echo "Estamos aqui $nome/$categoria_id";

})->where('categoria_id','[0-9]+')->where('nome','[A-Za-z]+');

*/

Route::get('/','PrincipalController@Principal')->name('site.index');
//Rota post para o formulario principal
Route::post('/','PrincipalController@Principal')->name('site.index');
Route::get('/sobrenos','SobreNosController@SobreNos')->name('site.sobrenos');
Route::get('/contato','ContatoController@contato')->name('site.contato');
//Rota post para o formulario contato post
Route::post('/contato','ContatoController@contato')->name('site.contato');
Route::get('/login',function(){ return '<h1>Login</h1>';})->name('site.login');


//AGRUPAMENTO


Route::prefix('/app')->group(function(){
   /* 
    Route::get('/clientes','ClienteController@Clientes');
    Route::get('/forenecedores','FornecedoresController@Fornecedores');
    Route::get('/produtos','ProdutosController@Produtos');
    
*/
    Route::get('/clientes',function(){ return '<h1>Clientes</h1>'; })->name('app.clientes');

    /*USADO PARA ESTUDAR O BLADE */
    Route::get('/fornecedores','FornecedoresController@index')->name('app.fornecedores');

    Route::get('/produtos',function(){ return '<h1>Produtos</h1>';  })->name('app.produtos');


}); 


//REDIRECIONAMENTO
/*
Route::get('/rota1',function(){

    echo 'Rota 1';

})->name('site.rota1');

Route::get('/rota2',function(){

    return redirect()->route('site.rota1');

})->name('site.rota2');

*/
//CASO NAO EXISTA ROTA
Route::fallback(function(){

    echo 'A rota acessada não existe <a href="'.route('site.index').'">Clique </a> para ir a página inicial.';

});