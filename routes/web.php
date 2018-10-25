<?php

Route::get('/', 'OrderController@index');

Route::post('/order', 'OrderController@order');

Route::get('/confirm', 'OrderController@confirmation');

/**
 * Practice
 */
Route::any('/practice/{n?}', 'PracticeController@index');