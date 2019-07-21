<?php

Route::get('/','PagesController@home');

Route::get('/hotels','PagesController@hotels');

Route::get('/restaurants','PagesController@restaurants');

Route::get('/tours','PagesController@tours');

Route::get('signupform','PagesController@signup');

Route::get('pagemanager','PagesController@pagemanager');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/bookings','BookingsController');

Route::resource('/hotels','HotelsController');

Route::resource('/restaurants','RestaurantsController');

?>
