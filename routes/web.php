<?php

Route::get('/', 'OrderController@index');

Route::get('/display', 'OrderController@display');

Route::post('/placeOrder', 'OrderController@placeOrder');

Route::get('/confirm', 'OrderController@confirmation');



/**
 * Practice
 */
Route::any('/practice/{n?}', 'PracticeController@index');