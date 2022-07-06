<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Auth;
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
//login form view
Route::get('/', function () {
    return view('login');
});
//user check
Route::post('/checkuser', [TestController::class, 'CheckUser']);

//register view
Route::get('/register', function () {
    return view('register');
});

//save user
Route::post('/userregister', [TestController::class, 'Register']);

Route::group(['middleware'=>'UserAuth'],function() {

//product
Route::get('/product', [TestController::class, 'viewproduct']);
Route::post('/productsave', [TestController::class, 'saveproduct']);
Route::get('/productlist', [TestController::class, 'viewproductlist']);
Route::get('product_edit_view/{id}',[TestController::class, 'product_EditView']);
Route::post('/product_update',[TestController::class, 'product_update']);
Route::get('product_delete/{id}',[TestController::class, 'product_delete']);

//logout
Route::get('/logout', [TestController::class, 'logout']);

//category form view
Route::get('/category', function () {
    return view('category');
});

//category save 
Route::post('/Addcategories', [TestController::class, 'catsave']);
//category list
Route::get('/categorylist', [TestController::class, 'viewcategorylist']);

//home
Route::get('/home', function () {
    return view('home');
});

});
