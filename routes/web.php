<?php

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

Route::get('/', function () {
    return view('index');
});


Route::get('/manifestacao/{type}', 'AdminController@manifestacao')->name('manifestacao');
Route::get('/instituicoes/{id}', 'AdminController@listaInstituicoes')->name('instituicoes');
Route::post('manifestacao/nova', 'AdminController@manifestacaoNova')->name('manifestacaoNova');
Route::get('manifestacao/visualizar/{id}', 'AdminController@visualizarManifestacao')->name('visualizarManifestacao');
Route::post('manifestacao/editar/{id}', 'AdminController@movimentarManifestacao')->name('movimentarManifestacao');
Route::post('manifestacao/creae', 'AdminController@manifestacaoSave')->name('manifestacaoSave');

Auth::routes();

Route::get('/home', 'AdminController@listaChamados')->name('home');
