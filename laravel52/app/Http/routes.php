<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});

Route::group(['middleware' => 'web'], function () {

    Route::auth();

    Route::get('List', array('as' => 'list',function () {
        return view('ListPage');
    }));

    Route::get('AddArticle', array('as' => 'addarticle',function ()
    {
        return view('AddArticle');
    }));

    Route::get('MySpace', array('as' => 'myspace',function ()
    {
        return view('Myspace');
    }));

    Route::get('BorrowHistory', array('as' => 'borrowhistory', 'uses' => 'Show_Borrow_History@show_borrow_history'));

    Route::get('MyHistory', array('as' => 'myhistory', 'uses' => 'Show_Upload_History@show_upload_history'));
    
    Route::post('add_article', 'Add_Article@add_article');

    Route::post('Add_Com', array('as' => 'add_com', 'uses' => 'Add_Com@add_com'));

    Route::get('/home', 'HomeController@index');

    Route::get('List1', 'Search_Article@Search_Livres');

    Route::get('List2', 'Search_Article@Search_Outils');

    Route::get('List3', 'Search_Article@Search_Joujous');

    Route::get('List4', 'Search_Article@Search_Vetements');

    Route::get('List5', 'Search_Article@Search_Articles');

    Route::get('List6', 'Search_Article@Search_Chaussures');

    Route::get('List7', 'Search_Article@Search_Portables');

    Route::get('List8', 'Search_Article@Search_Maquillages');

    Route::get('List9', 'Search_Article@Search_Sacs');

    Route::get('Article', array('as' => 'article', 'uses' => 'Show_Article@show_article'));

    Route::get('Borrow', array('as' => 'borrow', 'uses' => 'Show_Borrow_Confirme@show_borrow_confirme'));

    Route::any('Add_Borrow', array('as' => 'add_borrow', 'uses' => 'Add_Borrow@add_borrow'));

    Route::get('Delete', array('as' => 'delete', 'uses' => 'Delete@delete'));
});
