<?php



/*
Route::get('/', function () {
    return view('welcome');
});
*/


//Rota Inicio
Route::get('/camara', ['as' => 'inicio', 'uses' => 'CamaraController@inicio']);


//Rotas Vereador
Route::group(['as' => 'group.', 'prefix' => 'camara/vereadores'], function () {
    //CRUD
    Route::get('/', ['as' => 'index', 'uses' => 'CamaraController@index']);
    Route::get('/vereador/{id}', ['as' => 'show', 'uses' => 'CamaraController@show']);
    Route::get('/novo', ['as' => 'create', 'uses' => 'CamaraController@create']);
    Route::post('/salva', ['as' => 'store', 'uses' => 'CamaraController@store']);
    Route::get('/edita/{id}', ['as' => 'edit', 'uses' => 'CamaraController@edit']);
    Route::post('/atualiza/{id}', ['as' => 'update', 'uses' => 'CamaraController@update']);
    Route::get('/remove/{id}', ['as' => 'destroy', 'uses' => 'CamaraController@destroy']);

    /*  ---  imagens Vereador --- */
    Route::post('/update_foto/{id}', ['as' => 'update_foto', 'uses' => 'CamaraController@update_foto']);
    Route::get('/editafoto/{id}', ['as' => 'editfoto', 'uses' => 'CamaraController@editfoto']);

    /* ---  ADM  ---*/
    Route::get('/perfil', ['as' => 'perfil', 'uses' => 'UserController@perfil']);
    Route::post('/update_avatar', ['as' => 'update_avatar', 'uses' => 'UserController@update_avatar']);

    //Rotas complementares
    Route::get('/crono', ['as' => 'cronometro', 'uses' => 'CamaraController@cronometro']);
    Route::post('/vereador/{id}', ['as' => 'uploand', 'uses' => 'CamaraController@uploand']);
    Route::get('/cronometro/{id}', ['as' => 'crono', 'uses' => 'CamaraController@crono']);
    
    /*Route::post('/img', ['as' => 'store', 'uses' => 'CamaraController@store']);*/

});



//Rotas Projeto
Route::group(['as' => 'group.projeto.', 'prefix' => 'camara/projetos'], function () {
    //CRUD
    Route::get('/', ['as' => 'index', 'uses' => 'ProjetoController@index']);
    Route::get('/novo', ['as' => 'create', 'uses' => 'ProjetoController@create']);
    Route::post('/salva', ['as' => 'store', 'uses' => 'ProjetoController@store']); 
    Route::get('/edita/{id}', ['as' => 'edit', 'uses' => 'ProjetoController@edit']);
    Route::post('/atualiza/{id}', ['as' => 'update', 'uses' => 'ProjetoController@update']);
    Route::get('/remove/{id}', ['as' => 'destroy', 'uses' => 'ProjetoController@destroy']);
    Route::post('/voto/{id}/{id2}', ['as' => 'voto', 'uses' => 'ProjetoController@voto']);
    Route::get('/votar/{id}/{id2}', ['as' => 'votar', 'uses' => 'ProjetoController@votar']);
    Route::get('/{id}', ['as' => 'show', 'uses' => 'ProjetoController@show']); 
    
});

//Rotas sessão
Route::group(['as' => 'group.sessao.', 'prefix' => 'camara/sessoes'], function () {
    Route::get('/', ['as' => 'index', 'uses' => 'SessaoController@index']);
    Route::get('/novo', ['as' => 'create', 'uses' => 'SessaoController@create']);
    Route::get('/{id}', ['as' => 'show', 'uses' => 'SessaoController@show']);
    Route::post('/salva', ['as' => 'store', 'uses' => 'SessaoController@store']);  
    Route::get('edita/{id}', ['as' => 'edit', 'uses' => 'SessaoController@edit']);
    Route::post('/atualiza/{id}', ['as' => 'update', 'uses' => 'SessaoController@update']);
    Route::get('remove/{id}', ['as' => 'destroy', 'uses' => 'SessaoController@destroy']);
    
});


Route::auth();


Route::group(['middiawere' => 'web'], function (){
   Route::auth();
   
});

Route::get('/home', 'HomeController@index');
   Route::get('/', 'HomeController@index');

Route::get('/seguranca', function () {
    return view('Adm/segurar');
});