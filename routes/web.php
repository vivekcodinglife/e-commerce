<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\mailercontroller;


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

Route::get('/', [HomeController::class, 'index']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/redirect', [HomeController::class, 'redirect'])->middleware('auth', 'verified');

Route::get('/view_catagory', [AdminController::class, 'view_catagory']);

Route::get('/view_product', [AdminController::class, 'view_product']);
Route::Post('/save_product',[AdminController::class, 'save_product']);

Route::get('/show', [AdminController::class, 'show_product']);

Route::POST('/add_catagory', [AdminController::class, 'add_catagory']);
Route::get('/delete_catagory/{id}', [AdminController::class, 'delete_catagory']);



Route::get('/product_delete/{id}', [AdminController::class, 'delete_product']);

Route::get('/product_update/{id}', [AdminController::class, 'update_view']);


Route::Post('/update_product/{id}/confirm', [AdminController::class, 'update']);

Route::get('/product_detail/{id}',[HomeController::class, 'product_detail'] );

Route::post('/add_cart/{id}', [HomeController::class, 'AddCart']);

Route::get('/cart', [HomeController::class, 'CartView']);

Route::get('delete_cart_product/{id}', [HomeController::class, 'deleteCartProduct']);
 Route::get('/blog', [HomeController::class, 'blog_view']);

 Route::get('/contact', [HomeController::class, 'contact_view']);

 Route::get('/About',[HomeController::class, 'About_view']);

 Route::get('/testimonial', [HomeController::class , 'testimonal_view']);

 Route::get('/cash_order', [HomeController::class, 'CashOrder']);

 Route::get('/products_page', [HomeController::class, 'Product_page']);

 Route::get('/stripe/{total}', [HomeController::class, 'stripe']);

 Route::post('stripe', [HomeController::class, 'stripePost'])->name('stripe.post');



 Route::Post('/subscribe', [mailercontroller::class, 'subscribe']);
 Route::Post('/subscribe_for_Discount', [mailercontroller::class, 'Dis_subscribe']);



 Route::get('/order_view', [AdminController::class, 'order_view']);

 Route::get('/delivered/{id}', [AdminController::class, 'delivered']);
 Route::get('/pdf_print/{id}', [AdminController::class, 'pdf_print']);

 Route::get('/search',[AdminController::class, 'searchData' ]);

 Route::get('Searchproduct', [HomeController::class, 'searchproduct']);

 Route::get('/aboutus',[HomeController::class, 'about']);
