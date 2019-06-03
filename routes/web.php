<?php

Route::get('heroes', 'HeroesController@index')->name('heroes.index');

Route::get('heroes/create', 'HeroesController@create')->name('heroes.create');

Route::post('heroes/store', 'HeroesController@store')->name('heroes.store');

Route::get('heroes/{id}/edit', 'HeroesController@edit')->name('heroes.edit');

Route::put('heroes/{id}/update', 'HeroesController@update')->name('heroes.update');

Route::get('heroes/{id}/show', 'HeroesController@show')->name('heroes.show');

Route::delete('heroes/{id}/destroy', 'HeroesController@destroy')->name('heroes.destroy');

Route::get('heroes/{id}/edit_img', 'HeroesController@edit_img')->name('heroes.edit_img');

Route::post('heroes/{id}/update_img', 'HeroesController@update_img')->name('heroes.update_img');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');