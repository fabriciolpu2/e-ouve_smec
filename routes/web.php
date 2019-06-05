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


// Rotas Publicas
Route::get('/manifestacao/{type}', 'PublicController@manifestacao')->name('manifestacao');
Route::get('/instituicoes/{id}', 'PublicController@listaInstituicoes')->name('instituicoes');
Route::post('manifestacao/nova', 'PublicController@manifestacaoNova')->name('manifestacaoNova');
Route::post('busca-protocolo', 'PublicController@buscaProtocolo')->name('busca-protocolo');


// Rotas Admin
Route::get('manifestacao/visualizar/{id}', 'AdminController@visualizarManifestacao')->name('visualizarManifestacao');
Route::post('manifestacao/editar/{id}', 'AdminController@movimentarManifestacao')->name('movimentarManifestacao');
Route::post('manifestacao/create', 'AdminController@manifestacaoSave')->name('manifestacaoSave');
Route::get('/home', 'AdminController@listaChamados')->name('home');
Route::get('/manifestacoes/type/{id}', 'AdminController@listaChamadosType')->name('manifestacoes-tipo');
Route::get('/manifestacoes/status/{id}', 'AdminController@listaChamadosStatus')->name('manifestacoes-status');

Route::get('/seguranca', 'HomeController@index');


//Auth::routes();


// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');
Route::post('logout', 'Auth\LoginController@logout');

Route::get('/admin/usuarios/cadastrar', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::POST('/admin/usuarios/cadastrar', 'Auth\RegisterController@addUser')->name('addUser');
//Route::post('register', 'Auth\RegisterController@register');

Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');
Route::get('email/verify', 'Auth\VerificationController@show')->name('verification.notice');
Route::get('email/verify/{id}', 'Auth\VerificationController@verify')->name('verification.verify');
Route::get('email/resend', 'Auth\VerificationController@resend')->name('verification.resend');


