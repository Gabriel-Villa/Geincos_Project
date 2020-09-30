<?php



// Book Routes
Route::group(['namespace' => 'Book'],function(){
	Route::get('/','BookController@index')->name('inicio');
    Route::get('/create','BookController@create')->name('create');
    Route::post('/create','BookController@store');
});