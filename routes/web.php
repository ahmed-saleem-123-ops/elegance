<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\GoogleAuthController;
use App\Http\Controllers\StripePaymentController;




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





Route::group(['middleware' => 'guest'], function () {
    Route::get('/login', [\App\Http\Controllers\UserController::class, 'loginForm'])->name('user.login');
    Route::post('/login/store', [\App\Http\Controllers\UserController::class, 'login'])->name('user.login.store');
    Route::get('/register', [\App\Http\Controllers\UserController::class, 'registerForm'])->name('user.register');
    Route::post('/register/store', [\App\Http\Controllers\UserController::class, 'register'])->name('register.user');
});


Route::post('/cart/add', [\App\Http\Controllers\FrontendController::class, 'addToCart'])->name('cart.add');
Route::get('/cart', [\App\Http\Controllers\FrontendController::class, 'viewCart'])->name('cart.view');
Route::delete('/cart/{id}', [\App\Http\Controllers\FrontendController::class, 'destroy'])->name('cart.delete');
Route::post('/checkout/store', [\App\Http\Controllers\FrontendController::class, 'checkout'])->name('checkout');
Route::post('/cart/update/{id}', [\App\Http\Controllers\FrontendController::class, 'updateCart'])->name('cart.update');
Route::get('/cart/thank-you', [\App\Http\Controllers\FrontendController::class, 'ThankYou'])->name('cart.thank-you');
Route::post('/logout/front', [\App\Http\Controllers\UserController::class, 'logout'])->name('logout.user');

Route::get('/', [\App\Http\Controllers\FrontendController::class, 'home'])->name('home');
Route::get('/about', [\App\Http\Controllers\FrontendController::class, 'about'])->name('about');
Route::get('/contact', [\App\Http\Controllers\FrontendController::class, 'contact'])->name('contact');
Route::get('/blogs', [\App\Http\Controllers\FrontendController::class, 'blog'])->name('blog.index');
Route::get('/blog_detail', [\App\Http\Controllers\FrontendController::class, 'blog_detail'])->name('blog.details');
Route::get('/products/{category?}', [\App\Http\Controllers\FrontendController::class, 'products'])->name('products');
Route::get('/product_detail/{id}', [\App\Http\Controllers\FrontendController::class, 'details'])->name('product_detail');
Route::get('/contact', [\App\Http\Controllers\ContactController::class, 'create'])->name('contact');
Route::post('/contact', [\App\Http\Controllers\ContactController::class, 'store'])->name('contact.store');
Route::get('/error_page', [\App\Http\Controllers\FrontendController::class, 'error_page'])->name('error_page');

Route::get('auth/google', [\App\Http\Controllers\GoogleAuthController::class, 'redirect']);
Route::get('/auth/google/call-back', [\App\Http\Controllers\GoogleAuthController::class, 'callbackGoogle']);



Route::match(['get', 'post'], 'stripe', [StripePaymentController::class, 'stripe'])->name('stripe');
Route::post('stripe/post', [StripePaymentController::class, 'stripePost'])->name('stripe.post');



// Admin Routes
Route::group(['middleware' => 'guest:admin', 'prefix' => 'admin'], function () {
    Route::get('/login', [\App\Http\Controllers\Admin\AdminController::class, 'loginForm'])->name('admin.login');
    Route::post('/login/store', [\App\Http\Controllers\Admin\AdminController::class, 'login'])->name('admin.login.store');
    Route::get('/register', [\App\Http\Controllers\Admin\AdminController::class, 'registerForm'])->name('admin.register');
    Route::post('/register/store', [\App\Http\Controllers\Admin\AdminController::class, 'register'])->name('register');
});

Route::group(['middleware' => 'auth:admin', 'prefix' => 'admin'], function () {
    Route::get('/product', [\App\Http\Controllers\ProductController::class, 'index'])->name('admin.product');
    Route::get('/product/create', [\App\Http\Controllers\ProductController::class, 'create'])->name('product.create');
    Route::post('/product/store', [\App\Http\Controllers\ProductController::class, 'store'])->name('product.store');
    Route::get('/product/edit/{id}', [\App\Http\Controllers\ProductController::class, 'edit'])->name('product.edit');
    Route::put('/product/update/{id}', [\App\Http\Controllers\ProductController::class, 'update'])->name('product.update');
    Route::delete('/product/{id}', [\App\Http\Controllers\ProductController::class, 'destroy'])->name('product.delete');

    Route::get('/blog', [\App\Http\Controllers\BlogController::class, 'index'])->name('blog');
    Route::get('/blog/create', [\App\Http\Controllers\BlogController::class, 'create'])->name('blog.create');
    Route::post('/blog/store', [\App\Http\Controllers\BlogController::class, 'store'])->name('blog.store');
    Route::get('/blog/edit/{id}', [\App\Http\Controllers\BlogController::class, 'edit'])->name('blog.edit');
    Route::post('/blog/update/{id}', [\App\Http\Controllers\BlogController::class, 'update']);
    Route::delete('/blog/{id}', [\App\Http\Controllers\BlogController::class, 'destroy'])->name('blog.delete');

    Route::get('/ahmed', [\App\Http\Controllers\AhmedController::class, 'index'])->name('ahmed');
    Route::get('/ahmed/create', [\App\Http\Controllers\AhmedController::class, 'create'])->name('ahmed.create');
    Route::post('/ahmed/store',[\App\Http\Controllers\AhmedController::class, 'store'])->name('ahmed.store');
    Route::get('/ahmed/edit/{id}', [\App\Http\Controllers\AhmedController::class,'edit'])->name('ahmed.edit');
    Route::put('/ahmed/update/{id}',[\App\Http\Controllers\AhmedController::class, 'update'])->name('ahmed.update');
    Route::delete('/ahmed/{id}',[\App\Http\Controllers\AhmedController::class, 'destroy'])->name('ahmed.delete');


    Route::get('/category', [\App\Http\Controllers\CategoryController::class, 'index'])->name('category');
    Route::get('/category/create', [\App\Http\Controllers\CategoryController::class, 'create'])->name('category.create');
    Route::post('/category/store', [\App\Http\Controllers\CategoryController::class, 'store'])->name('category.store');
    Route::get('/category/edit/{id}', [\App\Http\Controllers\CategoryController::class, 'edit'])->name('category.edit');
    Route::put('/category/update/{id}', [\App\Http\Controllers\CategoryController::class, 'update'])->name('category.update');
    Route::delete('/category/{id}', [\App\Http\Controllers\CategoryController::class, 'destroy'])->name('category.delete');


    Route::get('/testimonial', [\App\Http\Controllers\TestimonialController::class, 'index'])->name('testimonial');
    Route::get('/testimonial/create', [\App\Http\Controllers\TestimonialController::class, 'create'])->name('testimonial.create');
    Route::post('/testimonial/store', [\App\Http\Controllers\TestimonialController::class, 'store'])->name('testimonial.store');
    Route::get('/testimonial/edit/{id}', [\App\Http\Controllers\TestimonialController::class, 'edit'])->name('testimonial.edit');
    Route::put('/testimonial/update/{id}', [\App\Http\Controllers\TestimonialController::class, 'update'])->name('testimonial.update');
    Route::delete('/testimonial/{id}', [\App\Http\Controllers\TestimonialController::class, 'destroy'])->name('testimonial.delete');

    Route::get('/order', [\App\Http\Controllers\OrderController::class, 'index'])->name('order');
    Route::get('/order/create', [\App\Http\Controllers\OrderController::class, 'create'])->name('order.create');
    Route::post('/order/store', [\App\Http\Controllers\OrderController::class, 'store'])->name('order.store');
    Route::get('/order/edit/{id}', [\App\Http\Controllers\OrderController::class, 'edit'])->name('order.edit');
    Route::put('/order/update/{id}', [\App\Http\Controllers\OrderController::class, 'update'])->name('order.update');
    Route::delete('/order/{id}', [\App\Http\Controllers\OrderController::class, 'destroy'])->name('order.delete');
    Route::get('/order/order-details/{id}', [\App\Http\Controllers\OrderController::class, 'show'])->name('order.detail');


    Route::get('/brand', [\App\Http\Controllers\BrandController::class, 'index'])->name('brand');
    Route::get('/brand/create', [\App\Http\Controllers\BrandController::class, 'create'])->name('brand.create');
    Route::post('/brand/store', [\App\Http\Controllers\BrandController::class, 'store'])->name('brand.store');
    Route::get('/brand/edit/{id}', [\App\Http\Controllers\BrandController::class, 'edit'])->name('brand.edit');
    Route::put('/brand/update/{id}', [\App\Http\Controllers\BrandController::class, 'update'])->name('brand.update');
    Route::delete('/brand/{id}', [\App\Http\Controllers\BrandController::class, 'destroy'])->name('brand.delete');


    Route::get('/tag', [\App\Http\Controllers\TagController::class, 'index'])->name('tag');
    Route::get('/tag/create', [\App\Http\Controllers\TagController::class, 'create'])->name('tag.create');
    Route::post('/tag/store', [\App\Http\Controllers\TagController::class, 'store'])->name('tag.store');
    Route::get('/tag/edit/{id}', [\App\Http\Controllers\TagController::class, 'edit'])->name('tag.edit');
    Route::put('tag/update/{id}', [\App\Http\Controllers\TagController::class, 'update'])->name('tag.update');
    Route::delete('tag/delete/{id}', [\App\Http\Controllers\TagController::class, 'destroy'])->name('tag.delete');
    

    Route::get('/admin_index', [\App\Http\Controllers\FrontendController::class, 'admin'])->name('admin');
    Route::post('/logout', [\App\Http\Controllers\Admin\AdminController::class, 'logout'])->name('logout');

});



Route::get('/products/category/{category}', [\App\Http\Controllers\FrontendController::class, 'showByCategory'])->name('products.byCategory');
Route::get('/products/brand/{brand}', [\App\Http\Controllers\FrontendController::class, 'showByBrand'])->name('products.byBrand');