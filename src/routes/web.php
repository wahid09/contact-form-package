<?php


Route::group(['namespace'=>'Wahid09\Contact\Http\Controllers'], function(){
    Route::get('contact', 'ContactController@index')->name('showForm');
    Route::post('contact-post', 'ContactController@store')->name('contact');
});



