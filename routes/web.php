<?php



// Book Routes
Route::group(['namespace' => 'Book'],function(){
	Route::get('/','BookController@index')->name('inicio');
    Route::get('/create','BookController@create')->name('create');
    Route::post('/create','BookController@store');

    Route::get('/edit/{id}','BookController@show')->name('edit');
    Route::put('/edit/{id}','BookController@update')->name('update');


    Route::delete('/delete/{id}', 'BookController@destroy')->name('destroy');
});