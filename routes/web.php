<?php
// Web
Route::get('/', 'WebController@index')->name('index');
// Autenticación
Route::prefix('autenticacion')->group(function() {
	Route::get('/', 'AuthController@index')->name('autenticacion');
	Route::post('/autenticar', 'AuthController@auth');
	Route::get('/crear-cuenta', 'AuthController@create')->name('autenticacion/crear-cuenta');
	Route::post('/crear-cuenta/crear', 'AuthController@store');
	Route::get('/recuperar-contrasena', 'AuthController@index')->name('autenticacion/recuperar-contrasena');
	Route::post('/recuperar-contrasena/recuperar', 'AuthController@index');
	Route::get('/cerrar-sesion', 'AuthController@logout');
});
// Escritorio
Route::prefix('escritorio')->middleware('user.status')->group(function() {
	// Index
	Route::get('/', 'DashboardController@index')->name('escritorio');
	// Usuarios
	Route::prefix('usuarios')->group(function() {
		Route::get('/', 'DashboardController@users')->name('escritorio/usuarios');
		Route::get('/editar/{id}', 'DashboardController@users_edit')->name('escritorio/editar');
		Route::get('/actualizar/{id}', 'DashboardController@users_update');
	});
	// Usuario
	Route::get('/usuario/{id}', 'DashboardController@user');
	Route::post('/usuario/actualizar/{id}', 'DashboardController@user_update');
	// Metadatos
	Route::get('/metadatos', 'DashboardController@metadata')->name('escritorio/metadatos');
	Route::post('/metadatos/actualizar', 'DashboardController@metadata_update');
	// Cabecera
	Route::get('/cabecera', 'DashboardController@header')->name('escritorio/cabecera');
	Route::post('/cabecera/actualizar', 'DashboardController@header_update');
	// Nosotros
	Route::get('/nosotros', 'DashboardController@about')->name('escritorio/nosotros');
	Route::post('/nosotros/actualizar', 'DashboardController@about_update');
	// Contacto
	Route::get('/contacto', 'DashboardController@contact')->name('escritorio/contacto');
	Route::post('/contacto/actualizar', 'DashboardController@contact_update');
	// Abouts
	Route::prefix('about')->group(function() {
		Route::get('/', 'DashboardController@abouts')->name('escritorio/about');
		Route::get('/crear', 'DashboardController@abouts_create')->name('escritorio/about/crear');
		Route::post('/almacenar', 'DashboardController@abouts_store');
		Route::get('/editar/{id}', 'DashboardController@abouts_edit')->name('escritorio/about/editar');
		Route::post('/actualizar/{id}', 'DashboardController@abouts_update');
	});
	// Artículos
	Route::prefix('articulos')->group(function() {
		Route::get('/', 'DashboardController@articles')->name('escritorio/articulos');
		Route::get('/crear', 'DashboardController@articles_create')->name('escritorio/articulos/crear');
		Route::post('/almacenar', 'DashboardController@articles_store');
		Route::get('/editar/{id}', 'DashboardController@articles_edit')->name('escritorio/articulos/editar');
		Route::post('/actualizar/{id}', 'DashboardController@articles_update');
	});
});