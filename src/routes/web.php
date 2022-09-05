<?php

use Illuminate\Http\Request;

Route::group(['namespace' => "Gourav\Contact\Http\Controllers"], function () {
    Route::get('contact', 'ContactController@index')->name('contact');
    Route::get('contact-us', 'ContactController@index')->name('contact-us');

    Route::post('contact', 'ContactController@send');
 });
