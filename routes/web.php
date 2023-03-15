<?php

use App\Http\Controllers\AdminProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FacebookController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\ShowController;
use App\Http\Controllers\ViewProductController;
use App\Http\Controllers\ViewUserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    if (auth()->user()->is_admin){
        return redirect('admin');
    } else{
        return redirect()->route('showdata.index');
    }})->middleware(['auth' , 'verified'])->name('dashboard');

Route::get('cart', function (){
    return view('cart');
})->middleware(['auth', 'verified'])->name('cart');

Route::get('about', function (){
    return view('about');
})->middleware(['auth', 'verified'])->name('about');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';




//admin home
Route::get('admin', function (){
    return view('admin.home');
})->middleware('admin_check');

//admin add category
Route::resource('category' , CategoryController::class)->middleware('admin_check');

//admin add product
Route::resource('adminproduct' , AdminProductController::class)->middleware('admin_check');


//show products in home page
Route::resource('showdata', ViewProductController::class);

//admin show users
Route::resource('adminuser' , ViewUserController::class);

//search
Route::resource('search' , SearchController::class);


// routs for shopping
//Cart
Route::get('cart/add/{id}', [CartController::class, 'AddToCart'])->name('cart.add');

//show product cart
Route::get('cart', [CartController::class, 'cart'])->name('cart');

//remove product cart
Route::get('cart/remove/{id}', [CartController::class, 'RemoveFromCart'])->name('cart.remove');


//show full product
Route::get('view/{id}' , [ShowController::class, 'showproduct'])->name('show');


//facebook
Route::get('auth/facebook', [ FacebookController::class , 'redirectToFacebook' ])->name('auth.facebook');
Route::get('auth/facebook/callback', [ FacebookController::class , 'handleFacebookCallback' ]);
