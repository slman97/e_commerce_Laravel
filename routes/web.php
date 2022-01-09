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

use App\Mail\NewUserWelcomeMail;

Route::group(['middleware'=>['auth']], function (){
   Route::post('favorite/{post}/add','FavoriteController@add')->name('post.favorite');
   Route::post('comment/{post}','CommentController@store')->name('comment.store');
});
    Route::group(['middleware'=>['auth','admin']],function () {
        Route::get('/dashboard', function () {
            return view('admin.dashboard');
        });
        Route::get('/role-register','Admin\DashboardController@registered');
        Route::get('/role-edit/{id}','Admin\DashboardController@registeredit');
        Route::put('/role-register-update/{id}','Admin\DashboardController@registerupdate');
        Route::delete('/role-delete/{id}','Admin\DashboardController@registerdelete');

        Route::get('/ad-update/{id}','Admin\DashboardController@adupdate');
        Route::put('/adupdate/{id}','Admin\DashboardController@adupdat');
        Route::get('/message-reply/{id}','Admin\DashboardController@messagereply');
        Route::put('/messages-reply/{id}','Admin\DashboardController@messagerepl');
        
        Route::get('/abouts','Admin\AboutusController@index');
        Route::post('/save-aboutus','Admin\AboutusController@store');
        Route::get('/about-us/{id}','Admin\AboutusController@edit');
        Route::put('/aboutus-update/{id}','Admin\AboutusController@update');
        Route::delete('about-us-delete/{id}','Admin\AboutusController@delete');
//
        Route::get('/ads-requset','Admin\AdsController@adsrequset');
        Route::get('/user-massege','Admin\usermassegeController@usermassege');
        Route::get('/user-cart','Admin\usermassegeController@usercart');

//
        Route::get('/service-category','Admin\ServiceController@index');
        Route::get('/service-create','Admin\ServiceController@create');
        Route::POST('/category-store','Admin\ServiceController@store');

        Route::get('/role','Admin\DashboardController@registere');
        Route::delete('/role-delet/{id}','Admin\DashboardController@registerdel');
        Route::get('/role-registe','Admin\DashboardController@registere');


    });

Route::group(['prefix' => LaravelLocalization::setLocale()], function()
{
Auth::routes();
Route::get('/email', function () {
    return new NewUserWelcomeMail();
});
    
Route::get('/','HomeController@index');
Route::delete('/comments/{id}', 'CommentssController@destroy')->name('comments.destroy');
Route::post('follow/{user}', 'FollowsController@store');
Route::post('like/{post}', 'LikesController@store');
Route::get('/home','PostsController@index');
Route::get('/explore','PostsController@explore');

// Post
Route::get('/p/create','PostsController@create');
Route::post('/p','PostsController@store');
Route::get('/p/{post}','PostsController@show');
Route::get('/p/{id}/edit','PostsController@edit')->name('posts.edit');
Route::put('/p/{id}','PostsController@update')->name('posts.update');
Route::delete('/p/{id}','PostsController@destroy')->name('posts.destroy');
Route::post('/p/{post}','PostsController@reportPost')->name('post.report');

//Profile
Route::get('/profile/{user}', 'ProfilesController@index')->name('profile.show');

Route::get('/profile/{user}/edit', 'ProfilesController@edit')->name('profile.edit');
Route::patch('/profile/{user}', 'ProfilesController@update')->name('profile.update');

Route::get('/posts/{post}', 'ProfilesController@post');

//Comment
Route::post('/posts/{post}/store','CommentssController@store');




//Ads
Route::post('/ad/{post}/store','AdController@store');
Route::get('/{post}/adcerate','AdController@create');


//Cart
Route::get('/cart/{user}', 'cartController@index')->name('cart.cart');
Route::post('/cart/{post}/store','cartController@store');
Route::delete('/cart/{id}','cartController@destroy')->name('carts.destroy');
Route::get('/cart/{user}/checkout', 'cartController@pay')->name('cart.pay');
Route::get('/cart/{user}/checkout/ok', 'cartController@ok')->name('cart.ok');

//wishlist
Route::get('/wishlist/{user}', 'wishlistController@index')->name('wishlist.wishlist');
Route::post('/wishlist/{post}/store','wishlistController@store');
Route::delete('/wishlist/{id}','wishlistController@destroy')->name('wishlist.destroy');

//contactus
Route::get('/contactus','ContactController@create');
Route::post('/contactus/store','ContactController@store');
Route::get('/massege/{user}', 'ContactController@show')->name('massege.show');

//search
Route::get('search', 'postsController@search')->name('search');
Route::get('terms', 'homeController@term')->name('terms');
Route::get('Return', 'homeController@Return')->name('Return');
Route::get('Privacy', 'homeController@Privacy')->name('Privacy');
Route::get('About', 'homeController@About')->name('About');
Route::get('shop/{category_id}', 'postsController@shop')->name('shop');

});

Addchat::routes();
