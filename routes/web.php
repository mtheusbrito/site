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

//rotas site
Route::get('/', 'SiteController@inicio')->name('site.inicio');
Route::get('/empresa', 'SiteController@empresa')->name('site.empresa');
Route::get('/projetos', 'SiteController@projetos')->name('site.projetos');
Route::get('/solucoes', 'SiteController@solucoes')->name('site.solucoes');
Route::get('/contato', 'SiteController@contato')->name('site.contato');

//rotas adm site