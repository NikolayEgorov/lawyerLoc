<?php

Route::get('/', 'AppControllers\MainController@index')->name('home');
Route::get('/contact', 'AppControllers\MainController@contact');
Route::get('/about_company', 'AppControllers\MainController@aboutCompany');
Route::get('/services', 'AppControllers\MainController@services');
Route::get('/blog', 'AppControllers\MainController@blog');
Route::get('/card', 'AppControllers\MainController@card');
