<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'calendar'], function(){
    Route::get('','GoogleCalendarController@Index')->name('calendar');           
    Route::get('create','GoogleCalendarController@Create')->name('calendar.create'); 
});   
