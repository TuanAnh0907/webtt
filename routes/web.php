<?php

use Illuminate\Support\Facades\Route;

/***************Admin********************/

Route::prefix('admin')->group(function(){
    Route::get('login', 'Admin\AuthController@login')->name('admin.auth.login');

    Route::post('check', 'Admin\AuthController@checkLogin')->name('admin.auth.checkLogin');
});

Route::prefix('admin')->middleware('admin.login')->group(function(){

    Route::get('logout', 'Admin\AuthController@logout')->name('admin.logout');

    Route::get('profile', 'Admin\AuthController@profile')->name('admin.profile.index');

    Route::put('profile', 'Admin\AuthController@updateProfile')->name('admin.profile.update');

    Route::get('home', 'Admin\AuthController@home')->name('admin.home');

    Route::prefix('category')->group(function(){
        
        Route::get('', 'Admin\CategoryController@index')->name('admin.category.index');

        Route::get('create', 'Admin\CategoryController@create')->name('admin.category.create');

        Route::post('store', 'Admin\CategoryController@store')->name('admin.category.store');

        Route::get('edit/{id}', 'Admin\CategoryController@edit')->name('admin.category.edit');

        Route::put('update/{id}', 'Admin\CategoryController@update')->name('admin.category.update');

        Route::get('delete/{id}', 'Admin\CategoryController@delete')->name('admin.category.delete');

    });

    Route::prefix('comment')->group(function(){
        
        Route::get('', 'Admin\CommentController@index')->name('admin.comment.index');

        Route::get('create', 'Admin\CommentController@create')->name('admin.comment.create');

        Route::post('store', 'Admin\CommentController@store')->name('admin.comment.store');

        Route::get('edit/{id}', 'Admin\CommentController@edit')->name('admin.comment.edit');

        Route::put('update/{id}', 'Admin\CommentController@update')->name('admin.comment.update');

        Route::get('delete/{id}', 'Admin\CommentController@delete')->name('admin.comment.delete');

    });

    Route::prefix('contact')->group(function(){
        
        Route::get('', 'Admin\ContactController@index')->name('admin.contact.index');

        Route::get('delete/{id}', 'Admin\ContactController@delete')->name('admin.contact.delete');

    });

    Route::prefix('post')->group(function(){
        
        Route::get('', 'Admin\PostController@index')->name('admin.post.index');

        Route::get('create', 'Admin\PostController@create')->name('admin.post.create');

        Route::post('store', 'Admin\PostController@store')->name('admin.post.store');

        Route::get('edit/{id}', 'Admin\PostController@edit')->name('admin.post.edit');

        Route::put('update/{id}', 'Admin\PostController@update')->name('admin.post.update');

        Route::get('delete/{id}', 'Admin\PostController@delete')->name('admin.post.delete');

    });

    Route::prefix('user')->group(function(){
        
        Route::get('', 'Admin\UserController@index')->name('admin.user.index');

        Route::get('create', 'Admin\UserController@create')->name('admin.user.create');

        Route::post('store', 'Admin\UserController@store')->name('admin.user.store');

        Route::get('edit/{id}', 'Admin\UserController@edit')->name('admin.user.edit');

        Route::put('update/{id}', 'Admin\UserController@update')->name('admin.user.update');

        Route::get('delete/{id}', 'Admin\UserController@delete')->name('admin.user.delete');

    });
});

/**/
Route::prefix('web')->group(function(){
    Route::get('login', 'Web\AuthController@formLogin');

    Route::post('login', 'Web\AuthController@login')->name('web.auth.login');

});

Route::get('logout', 'Web\AuthController@logout')->name('web.logout');

/**/

Route::get('/', 'Web\WebController@home');

Route::get('category', 'Web\WebController@category');

Route::get('category/{slug}', 'Web\WebController@categorySlug')->name('web.category');

Route::get('post/{slug}', 'Web\WebController@post')->name('web.post');

Route::post('post/comment/{id}', 'Web\WebController@comment')->name('web.post.comment');


Route::get('contact', 'Web\WebController@contact')->name('web.contact');

Route::post('contact', 'Web\WebController@sendContact')->name('web.contact.store');