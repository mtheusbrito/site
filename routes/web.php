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

//rotas site
Route::get('/', 'SiteController@inicio')->name('site.inicio');
Route::get('/empresa', 'SiteController@empresa')->name('site.empresa');
Route::get('/projetos', 'SiteController@projetos')->name('site.projetos');
Route::get('/solucoes', 'SiteController@solucoes')->name('site.solucoes');
Route::get('/contato', 'SiteController@contato')->name('site.contato');

//rotas adm site
Route::group(['middleware' => 'auth'], function () {

    Route::get('/adm', 'AdmController@index')->name('adm.index');

    Route::resource('/adm/projetos', 'ProjetoController');
    Route::resource('/adm/membros', 'MembrosController');
    Route::resource('/adm/slides', 'SlidesController');


    //paginates
    Route::get('/projetos/paginate', 'ProjetoController@paginate')->name('projetos.paginate');
    Route::get('/membros/paginate', 'MembrosController@paginate')->name('membros.paginate');
    Route::get('/slides/paginate', 'SlidesController@paginate')->name('slides.paginate');

});



//segunda mes de maio
//dia 10 15 um mes atrasado

Route::get('/login', 'LoginController@index')->name('login');
Route::post('/login', 'LoginController@login')->name('login');
Route::get('/logout', 'LoginController@logout')->name('logout');
