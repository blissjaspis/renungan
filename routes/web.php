<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/test', function () {
	return view('test');
});

Route::get('privacy', function () {
	return view('sources.privacy');
});


Route::get('series/{slug}', function () {
	return view('series.show');
});

Route::get('renungan-pagi', function () {
	return view('rp.index');
});

Route::get('renungan-pagi/{slug}', function () {
	return view('rp.post');
});


Route::group(['prefix' => '/user'], function() {
	Route::get('setting', function () {
		return view('users.setting.index');
	});
	
	Route::resource('/series', 'SerieController');
	Route::resource('/renungan-pagi', 'RenunganPagiController');
});

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/sekolah-sabat', 'HomeController@index')->name('home');
