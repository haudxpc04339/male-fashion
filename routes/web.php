<?php
use Laravel\Socialite\Facades\Socialite;

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\Client\CartController;
use App\Http\Controllers\Client\CheckoutController;

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\ProductCategoryController;
use App\Http\Controllers\Admin\PostCategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\OrderController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

 // Login Google 
    Route::get('login/google',[LoginController::class,'redirectToGoogle'])->name('login.google');
    Route::get('/laravel-socialite/public/login/google/callback',[LoginController::class,'handleGoogleCallback']);

 // Login Facebook
    Route::get('login/facebook',[LoginController::class,'redirectToFacebook'])->name('login.facebook');
    Route::get('/login/facebook/callback',[LoginController::class,'handleFacebookCallback']);

    Route::get('register',[RegisterController::class,'create']);
    Route::post('register',[RegisterController::class,'store'])->name('register');
    
    Route::get('login',[LoginController::class,'create']);
    Route::post('login',[LoginController::class,'store'])->name('login');

    Route::get('logout',[LoginController::class,'logout'])->name('logout');

    //ADMIN

    Route::prefix('admin')->middleware(['auth','isAdmin'])->name('admin.')->group(function() {
       
        Route::get('dashboard',[DashboardController::class,'index'])->name('dashboard');
       
       // Users
        Route::prefix('users')->name('users.')->group(function () {
                    
            Route::get('add', [UserController::class,'create']);
            Route::post('add', [UserController::class,'store'])->name('add');
            Route::get('list', [UserController::class,'index'])->name('list');
        });

        //Products
        Route::prefix('products')->name('products.')->group(function () {
            
            Route::get('add', [ProductController::class,'create']);
            Route::post('add', [ProductController::class,'store'])->name('add');
            Route::get('list', [ProductController::class,'index'])->name('list');
            Route::get('edit/{id}', [ProductController::class,'edit'])->name('edit');
            Route::put('update/{id}', [ProductController::class,'update'])->name('update');
            Route::get('delete/{id}', [ProductController::class,'delete'])->name('delete');

        });

        //Product Categories
        Route::prefix('productcategories')->name('productcategories.')->group(function () {
            
            Route::get('add', [ProductCategoryController::class,'create']);
            Route::post('add', [ProductCategoryController::class,'store'])->name('add');
            Route::get('list', [ProductCategoryController::class,'index'])->name('list');
            Route::get('edit/{id}', [ProductCategoryController::class,'edit'])->name('edit');
            Route::put('update/{id}', [ProductCategoryController::class,'update'])->name('update');
            Route::get('delete/{id}', [ProductCategoryController::class,'delete'])->name('delete');

        });

        //Posts
        Route::prefix('posts')->name('posts.')->group(function () {
            
            Route::get('add', [PostController::class,'create']);
            Route::post('add', [PostController::class,'store'])->name('add');
            Route::get('list', [PostController::class,'index'])->name('list');
            Route::get('edit/{id}', [PostController::class,'edit'])->name('edit');
            Route::put('update/{id}', [PostController::class,'update'])->name('update');
            Route::get('delete/{id}', [PostController::class,'delete'])->name('delete');

        });
        
        //Post Categories
        Route::prefix('postcategories')->name('postcategories.')->group(function () {
            
            Route::get('add', [PostCategoryController::class,'create']);
            Route::post('add', [PostCategoryController::class,'store'])->name('add');
            Route::get('list', [PostCategoryController::class,'index'])->name('list');
            Route::get('edit/{id}', [PostCategoryController::class,'edit'])->name('edit');
            Route::put('update/{id}', [PostCategoryController::class,'update'])->name('update');
            Route::get('delete/{id}', [PostCategoryController::class,'delete'])->name('delete');

        });

        //Order
        Route::prefix('orders')->name('orders.')->group(function () {
            
            Route::get('add', [OrderController::class,'create']);
            Route::post('add', [OrderController::class,'store'])->name('add');
            Route::get('list', [OrderController::class,'index'])->name('list');
            Route::get('edit/{id}', [OrderController::class,'edit'])->name('edit');
            Route::put('update/{id}', [OrderController::class,'update'])->name('update');
            Route::get('delete/{id}', [OrderController::class,'delete'])->name('delete');

        });
        
    });


    Route::get('/',[HomeController::class,'index'])->name('home');
    Route::get('/lien-he',[HomeController::class,'contact'])->name('contact');
    Route::get('/bai-viet',[HomeController::class,'post'])->name('post');
    Route::get('/bai-viet-chi-tiet/{id}',[HomeController::class,'postDetail'])->name('post-detail');
    Route::get('/san-pham',[HomeController::class,'shop'])->name('shop');
    Route::get('/san-pham-chi-tiet/{id}',[HomeController::class,'shopDetail'])->name('shop-detail');
    Route::get('/gioi-thieu',[HomeController::class,'about'])->name('about');
    Route::get('/gio-hang',[CartController::class,'index'])->name('shopping-cart');
    Route::post('/gio-hang',[CartController::class,'store'])->name('add-to-cart');
    Route::get('/gio-hang/xoa/{id}',[CartController::class,'delete'])->name('delete-cart');
    Route::get('/thanh-toan',[CheckoutController::class,'index'])->name('checkout');
    Route::post('/thanh-toan',[CheckoutController::class,'store'])->name('checkout-store');
    Route::get('/thanh-cong',[CheckoutController::class,'paymentSuccess'])->name('paymentSuccess');
    Route::get('/loi',[CheckoutController::class,'cancel'])->name('paymentCancel');
    Route::get('search',[HomeController::class,'search'])->name('search');