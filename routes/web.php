<?php
// Route::get('/', function () {
//     return view('layouts.plantilla1');
// });

Route::get('/', 'Web\PageController@index')->name('inicio');
Route::get('/servicios',      'Web\PageController@index1')->name('service');
Route::get('/sobre-nosotros', 'Web\PageController@index2')->name('about');




Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/admin/cover', 'Admin\CoverController');
Route::resource('/admin/product', 'Admin\ProductController');

// Route::get('/admin', function () {
//     return view('admin.dashboard.index');
// })->name('admin.dashboard.index');

// Route::get('/admin/portada/', function () {
//     return view('admin.portada.index');
// })->name('admin.portada.index');
// Route::get('/admin/portada/', 'Admin\CoverController@index')->name('home');

// Route::get('/admin/portada/create', function () {
//     return view('admin.portada.create');
// })->name('admin.portada.create');
// Route::resource('/admin/home', 'Admin\DashboardController');


// Auth::routes();
