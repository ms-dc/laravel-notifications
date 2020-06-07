<?php

Broadcast::routes();

Route::put('notification-all-read', 'NotificationController@markAllAsRead');
Route::put('notification-read', 'NotificationController@markAsRead');
Route::get('notifications', 'NotificationController@notifications')->name('notifications');

Route::post('comment', 'Posts\CommentController@store')->name('comment.store');
Route::resource('posts', 'Posts\PostController');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
