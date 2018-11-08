<?php

Route::get('/', 'OrderController@index');

Route::post('/placeOrder', 'OrderController@placeOrder');

Route::get('/confirm', 'OrderController@confirmation');

