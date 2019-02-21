<?php
use App\Product;

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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('products', 'ProductController');
Route::resource('categories', 'CategoryController');
Route::resource('orders', 'OrderController');
Route::resource('orderlines', 'OrderlinesController');


Route::get('/products2order', function () {
    $products=Product::all();
    return view('products.users.listview' )->withDetails($products);
});





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');





