<?php

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Input;

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

// Pages routes
Route::get('/', 'ContentController@index');
Route::get('/la-struttura/{anchor?}', 'ContentController@struttura');
Route::get('/attivita', 'ContentController@attivita');
Route::get('/attivita/{dipartimento}', 'ContentController@dipartimento');
Route::get('/attivita/{dipartimento}/{servizio}', 'ContentController@servizio');
Route::get('/accoglienza', 'ContentController@accoglienza');
Route::get('/amministrazione-trasparente/{anchor?}', 'ContentController@trasparenza');
// Route::get('/medici', 'ContentController@medici');
// Route::get('/medici/{id}/{slugfullname}', 'ContentController@medico');
Route::post('/medici/{id}/{slugfullname}', 'ContentController@medico');
Route::post('/docContact', 'ContentController@docContact');
Route::get('/contatti', 'ContentController@contatti');
Route::post('/contatti', 'ContentController@postContatti');
Route::get('/news/{category?}', 'ContentController@news');
Route::get('/news/{category}/{slug}', 'ContentController@notizia');
Route::get('/privacy-policy', 'ContentController@privacyPolicy');
Route::post('/headForm', 'ContentController@postHeadForm');


// Language route
Route::post('/language/', array(
        'before' => 'csrf',
        'as' => 'language-chooser',
        'uses' => 'LanguageController@changeLanguage',
    )
);

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
