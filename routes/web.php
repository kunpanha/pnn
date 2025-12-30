<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Page Routes...
Route::get('/', 'PageController@home')->name('home');
Route::get('/category/pr', 'PageController@pr')->name('pr');
Route::get('/category/drama', 'PageController@drama')->name('drama');
Route::get('/category/drama/khmer', 'PageController@khmer')->name('khmer');
Route::get('/category/drama/thai', 'PageController@thai')->name('thai');
Route::get('/category/drama/chinese', 'PageController@chinese')->name('chinese');
Route::get('/category/program', 'PageController@program')->name('program');
Route::get('/category/events', 'PageController@events')->name('events');
Route::get('/content/{id}', 'PageController@content')->name('content');
Route::get('/live-tv', 'PageController@live')->name('live');

// Authentication Routes...
Route::get('/admins/login', 'Auth\AuthenticatedSessionController@create')->name('login');
Route::post('/checklogin', 'Auth\AuthenticatedSessionController@store')->name('checklogin');
Route::post('/logout', 'Auth\AuthenticatedSessionController@destroy')->name('logout');

// Password Reset Routes...
Route::get('/forgot-password', 'Auth\PasswordResetLinkController@create')->name('password.request');
Route::post('/forgot-password', 'Auth\PasswordResetLinkController@store')->name('password.email');
Route::get('/reset-password/{token}', 'Auth\NewPasswordController@create')->name('password.reset');
Route::post('/reset-password', 'Auth\NewPasswordController@store')->name('password.update');

// Administrator Routes...
Route::group(['middleware'=>'auth'],function(){
    Route::prefix('administrator/main')->group(function () {

        // Dashborad Routes...
        Route::get('/dashboard', 'AdminController@dashboard')->name('dashboard');

        // Post Routes...
        Route::get('/post/insert-post', 'PostController@insert')->name('insert.article');
        Route::get('/ajax-subcate/{id}', 'PostController@getAjaxsubcate')->name('post.Ajaxsubcate');
        Route::post('/post/post-article', 'PostController@postArticle')->name('post.request');
        Route::post('/images-uploads', 'PostController@imagesUpload')->name('post.imagesUploads');

        // Category Routes...
        Route::get('/category/cate/list-category', 'CategoryController@category')->name('category');
        Route::get('/category/cate/insert-category', 'CategoryController@insert')->name('category.insert');
        Route::post('/category/cate/post-category', 'CategoryController@postInsertCategory')->name('category.request');

        // Sub Category Routes...
        Route::get('/category/subcate/list-subcate', 'SubcateController@subcate')->name('subcate');
        Route::get('/category/subcate/insert-subcate', 'SubcateController@insert')->name('subcate.insert');
        Route::post('/category/subcate/post-subcate', 'SubcateController@postInsertSubcate')->name('subcate.request');

        // User Routes...
        Route::get('/user/list', 'UserController@user')->name('user');
        Route::get('/user/insert-user', 'UserController@insert')->name('user.insert');
        Route::post('/user/post-user', 'UserController@postInsertUser')->name('user.request');

        // Change Password...
        Route::post('/change-password', 'AdminController@changepassword')->name('password.change');
        
    });
});