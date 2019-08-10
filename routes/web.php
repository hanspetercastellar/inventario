<?php


Route::get('/', 'inventarioController@index');

Route::prefix('productos')->group(function (){
    Route::get('crear','inventarioController@create')->name('create');
    Route::post('store','inventarioController@store')->name('store');
});