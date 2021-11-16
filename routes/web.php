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

//user
Route::get('/home',[App\Http\Controllers\User\HomeController::class,'getHome']);

//shop
Route::get('/shop',[App\Http\Controllers\User\ShopController::class,'getShop']);

//product
Route::get('/product_detail/{product_id}',[App\Http\Controllers\User\ProductController::class,'getProduct']);

//Carr
Route::post('/save_cart',[App\Http\Controllers\User\CartController::class,'saveCart']);
Route::get('/cart',[App\Http\Controllers\User\CartController::class,'showCart']);
Route::get('/delete_to_cart/{rowID}',[App\Http\Controllers\User\CartController::class,'deleteToCart']);
Route::post('/update_cart_quantity',[App\Http\Controllers\User\CartController::class,'updateCartQuantity']);

//checkout
Route::get('/checkout',[App\Http\Controllers\User\CheckoutController::class,'getCheckout']);
Route::post('/save_checkout_customer',[App\Http\Controllers\User\CheckoutController::class,'saveCheckout']);


//Admin
Route::get('admin/login',[App\Http\Controllers\Admin\LoginController::class,'getLogin'])->name('login');
Route::post('admin/login',[App\Http\Controllers\Admin\LoginController::class,'postLogin']);

Route::post('admin/logout',[App\Http\Controllers\Admin\LoginController::class,'postLogout']);

Route::middleware(['auth'])->group(function()
{
    Route::prefix('admin')->group(function(){
        Route::get('/',[App\Http\Controllers\Admin\DashboardController::class,'getDashboard']);

        //brand
        Route::get('/add_brand',[App\Http\Controllers\Admin\BrandController::class,'getAddBrand']);
        Route::post('/save_brand',[App\Http\Controllers\Admin\BrandController::class,'postAddBrand']);

        Route::get('/all_brand',[App\Http\Controllers\Admin\BrandController::class,'getAllBrand']);

        Route::get('/delete_brand/{brand_id}',[App\Http\Controllers\Admin\BrandController::class,'deleteBrand']);

        Route::get('/edit_brand/{brand_id}',[App\Http\Controllers\Admin\BrandController::class,'editBrand']);
        Route::post('/update_brand/{brand_id}',[App\Http\Controllers\Admin\BrandController::class,'updateBrand']);

        //category_card
        Route::get('/add_category_card',[App\Http\Controllers\Admin\CategoryCardController::class,'getAddCategoryCard']);
        Route::post('/save_category_card',[App\Http\Controllers\Admin\CategoryCardController::class,'saveCategoryCard']);

        Route::get('/all_category_card',[App\Http\Controllers\Admin\CategoryCardController::class,'getAllCategoryCard']);

        Route::get('/delete_category_card/{category_card_id}',[App\Http\Controllers\Admin\CategoryCardController::class,'deleteCategoryCard']);

        Route::get('/edit_category_card/{category_card_id}',[App\Http\Controllers\Admin\CategoryCardController::class,'editCategoryCard']);
        Route::post('/update_category_card/{category_card_id}',[App\Http\Controllers\Admin\CategoryCardController::class,'updateCategoryCard']);

        //card
        Route::get('/add_card',[App\Http\Controllers\Admin\CardController::class,'getAddCard']);
        Route::post('/save_card',[App\Http\Controllers\Admin\CardController::class,'saveCard']);

        Route::get('/all_card',[App\Http\Controllers\Admin\CardController::class,'getAllCard']);

        Route::get('/edit_card/{card_id}',[App\Http\Controllers\Admin\CardController::class,'editCard']);
        Route::post('/update_card/{card_id}',[App\Http\Controllers\Admin\CardController::class,'updateCard']);

        //product
        Route::get('/add_product',[App\Http\Controllers\Admin\ProductController::class,'getAddProduct']);
        Route::post('/save_product',[App\Http\Controllers\Admin\ProductController::class,'saveAddProduct']);

        Route::get('/all_product',[App\Http\Controllers\Admin\ProductController::class,'getAllProduct']);

        Route::get('/edit_product/{product_id}',[App\Http\Controllers\Admin\ProductController::class,'editProduct']);
        Route::post('/update_product/{product_id}',[App\Http\Controllers\Admin\ProductController::class,'updateProduct']);

        Route::get('/delete_product/{product_id}',[App\Http\Controllers\Admin\ProductController::class,'deleteProduct']);
    });
});