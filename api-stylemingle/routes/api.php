<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\CouponController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderDetailController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PaymentMethodController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductDetailController;
use App\Http\Controllers\ProductImageController;
use App\Http\Controllers\ShippingAddressController;
use App\Http\Controllers\SizeController;
use App\Http\Controllers\StockController;
use App\Models\ProductImage;
use App\Models\ShippingAddress;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

//Publish routes
//=====================================================================================
//product
Route::get('/products', [ProductController::class, 'index']);
Route::get('/products/{id}', [ProductController::class, 'show']);
Route::get('/products/search/{name}', [ProductController::class, 'search']);
Route::get('/products/type/{name}', [ProductController::class, 'type']);

//product detail
Route::get('/productdetails', [ProductDetailController::class, 'index']);
Route::get('/productdetails/{id}', [ProductDetailController::class, 'show']);

//login & register
Route::post('/signup', [AuthController::class, 'signup']);
Route::post('/login', [AuthController::class, 'login']);

//category
Route::get('/categories', [CategoryController::class, 'index']);
Route::get('/categories/{id}', [CategoryController::class, 'show']);
Route::get('/categories/search/{name}', [CategoryController::class, 'search']);
Route::get('/categories/products/{id}', [CategoryController::class, 'products']);

//color
Route::get('/colors', [ColorController::class, 'index']);
Route::get('/colors/{id}', [ColorController::class, 'show']);
Route::get('/colors/search/{name}', [ColorController::class, 'searchName']);
Route::get('/colors/search/{code}', [ColorController::class, 'searchCode']);


//size
Route::get('/sizes', [SizeController::class, 'index']);
Route::get('/sizes/{id}', [SizeController::class, 'show']);
Route::get('/sizes/search/{name}', [SizeController::class, 'search']);

//stock
Route::get('/stocks', [StockController::class, 'index']);
Route::get('/stocks/{id}', [StockController::class, 'show']);

//Order
Route::get('/orders', [OrderController::class, 'index']);
Route::get('/orders/{id}', [OrderController::class, 'show']);

//order detail
Route::get('/orderdetails', [OrderDetailController::class, 'index']);
Route::get('/orderdetails/{id}', [OrderDetailController::class, 'show']);

//payment method
Route::get('/paymentmethods', [PaymentMethodController::class, 'index']);
Route::get('/paymentmethods/{id}', [PaymentMethodController::class, 'show']);
Route::get('/paymentmethods/search/{name}', [PaymentMethodController::class, 'search']);

//payment
Route::get('/payments', [PaymentController::class, 'index']);
Route::get('/payments/{id}', [PaymentController::class, 'show']);

//shipping address
Route::get('/shippingaddresses', [ShippingAddressController::class, 'index']);
Route::get('/shippingaddresses/{id}', [ShippingAddressController::class, 'show']);

//coupon
Route::get('/coupons', [CouponController::class, 'index']);
Route::get('/coupons{id}', [CouponController::class, 'show']);

//cart
Route::get('/carts', [CartController::class, 'index']);
Route::get('/carts/{id}', [CartController::class, 'show']);
Route::get('/carts/products/{id}', [CartController::class, 'getProducts']);

//product images
Route::get('/productimages', [ProductImageController::class, 'index']);
Route::get('/productimages/{id}', [ProductImageController::class, 'show']);

//=====================================================================================
// Route::put('/products/{id}', [ProductController::class, 'update']);
//Protected routes
Route::group(['middleware' => ['auth:sanctum']], function () {
    // Route::apiResource('/products', ProductController::class);
    // Route::apiResource('')
    //products
    Route::post('/products', [ProductController::class, 'store']);
    Route::put('/products/{id}', [ProductController::class, 'update']);
    // Route::patch('/products/{id}', [ProductController::class, 'update']);
    Route::delete('/products/{id}', [ProductController::class, 'destroy']);

    //logout
    Route::post('/logout', [AuthController::class, 'logout']);


    //category
    Route::post('/categories', [CategoryController::class, 'store']);
    Route::put('/categories/{id}', [CategoryController::class, 'update']);
    Route::delete('/categories/{id}', [CategoryController::class, 'destroy']);

    //color
    Route::post('/colors', [ColorController::class, 'store']);
    Route::put('/colors/{id}', [ColorController::class, 'update']);
    Route::delete('/color/{id}', [ColorController::class, 'destroy']);

    //size
    Route::post('/sizes', [SizeController::class, 'store']);
    Route::put('/sizes/{id}', [SizeController::class, 'update']);
    Route::delete('/sizes/{id}', [SizeController::class, 'destroy']);

    //product detail
    Route::post('/product_details', [ProductDetailController::class, 'store']);
    Route::put('/product_details/{id}', [ProductDetailController::class, 'update']);
    Route::delete('/product_details/{id}', [ProductDetailController::class, 'destroy']);

    //Stock
    Route::post('/skocks', [StockController::class, 'store']);
    Route::put('/stocks/{id}', [StockController::class, 'update']);
    Route::delete('/stocks/{id}', [StockController::class, 'destroy']);

    //Order
    Route::post('/orders', [OrderController::class, 'store']);
    Route::put('/orders/{id}', [OrderController::class, 'update']);
    Route::delete('/orders/{id}', [OrderController::class, 'destroy']);

    //Order detail
    Route::post('/orderdetails', [OrderDetailController::class, 'store']);
    Route::put('/orderdetails/{id}', [OrderDetailController::class, 'update']);
    Route::delete('/orderdetails/{id}', [OrderDetailController::class, 'destroy']);
    
    //payment method
    Route::post('/paymentmethods', [PaymentMethodController::class, 'store']);
    Route::put('/paymentmethods/{id}', [PaymentMethodController::class, 'update']);
    Route::delete('/paymentmethods/{id}', [PaymentMethodController::class, 'destroy']);

    //payment
    Route::post('/payments', [PaymentController::class, 'store']);
    Route::put('/payments/{id}', [PaymentController::class, 'update']);
    Route::delete('/payments/{id}', [PaymentController::class, 'destroy']);

    //shipping address
    Route::post('/shippingaddresses', [ShippingAddressController::class, 'store']);
    Route::put('/shippingaddresses/{id}', [ShippingAddressController::class, 'update']);
    Route::delete('/shippingaddresses/{id}', [ShippingAddressController::class, 'destroy']);

    //coupon
    Route::post('/coupons', [CouponController::class, 'store']);
    Route::put('/coupons/{id}', [CouponController::class, 'update']);
    Route::delete('/coupons/{id}', [CouponController::class, 'destroy']);

    //cart
    Route::post('/carts', [CartController::class, 'store']);
    Route::put('/carts/{id}', [CartController::class, 'update']);
    Route::delete('/carts/{id}', [CartController::class, 'destroy']);
    Route::delete('/carts/clear/{id}', [CartController::class, 'clear']);

    //product images
    Route::post('/productimages', [ProductImageController::class, 'store']);

});

Route::middleware('auth:api')->get('/user', function (Request $request) {
   return $request->user();
});
