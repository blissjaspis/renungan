<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
	return view('test');
});

Route::get('login/{driver}', 'Auth\LoginController@redirectToProvider');
Route::get('login/{driver}/callback', 'Auth\LoginController@handleProviderCallback');

Auth::routes();

Route::get('/blog', function () {
	return view('public.blog.index');
});
Route::get('/blog/{slug}', function () {
	return view('public.blog.show');
});

Route::get('privacy', function () {
	return view('sources.privacy');
});

Route::get('series/{slug}', function () {
	return view('public.series.show');
});

Route::get('renungan-pagi', function () {
	return view('public.rp.index');
});

Route::get('renungan-pagi/{slug}', function () {
	return view('public.rp.post');
});

Route::group(['prefix' => '/admin', 'middleware' => 'auth'], function () {
	Route::name('admin.dashboard')->get('/dashboard', function () {
		return view('admin.index');
	});

	Route::resource('/series', 'SerieController', ['names' => 'admin.series']);
	Route::resource('/renungan-pagi', 'RenunganPagiController', ['names' => 'admin.renungan-pagi']);
	Route::resource('/blog', 'BlogController', ['names' => 'admin.blog']);

});

Route::group(['prefix' => '/user'], function() {
	Route::get('setting', function () {
		return view('users.setting.index');
	});
});

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/sekolah-sabat', 'HomeController@index')->name('home');
