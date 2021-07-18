<?php


Route::prefix('dashboard')->middleware('admin')->name('dashboard.')->group(function(){
    Route::get('/','WelcomeController@index')->name('users');
    Route::get('/registered','WelcomeController@registered')->name('register');

    Route::get('accept/{id}','WelcomeController@accept')->name('accept');
    Route::get('refuse/{id}','WelcomeController@refuse')->name('refuse');

    Route::get('create','CreateUserController@create')->name('create');
    Route::post('create','CreateUserController@store')->name('store');

    Route::get('update/{id}','CreateUserController@edit')->name('edit');
    Route::post('update/{id}','CreateUserController@update')->name('update');

});
