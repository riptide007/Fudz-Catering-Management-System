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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::view('/Landing', 'landing');
Route::view('/page1', 'Input/ClientIn');
Route::view('/page1-o', 'Output/ClientOut');
Route::view('/page2', 'Input/CateringIn');
Route::view('/page2-o', 'Output/CateringOut');
Route::view('/page3', 'Input/EmployeeIn');
Route::view('/page3-o', 'Output/EmployeeOut');
Route::view('/page4', 'Input/SupplierIn');
Route::view('/page4-o', 'Output/SupplierOut');
Route::view('/page5', 'Input/InventoryIn');
Route::view('/page5-o', 'Output/InventoryOut');
Route::view('/page6', 'Input/ShoppingListIn');
Route::view('/page6-o', 'Output/ShoppingListOut');
Route::view('/page7', 'Input/WorkDetailIn');
Route::view('/page7-o', 'Output/WorkDetailOut');
Route::view('/page8', 'Input/DishesIn');
Route::view('/page8-o', 'Output/DishesOut');
Route::view('/OutUser', 'Output/UserOut');
Route::view('/test-page', 'TestPage');
Route::match(['get', 'post'], '/dashboard', function(){
    return view('dashboard');
});
Route::view('/examples/plugin-helper', 'examples.plugin_helper');
Route::view('/examples/plugin-init', 'examples.plugin_init');
Route::view('/examples/blank', 'examples.blank');

Route::post('/page1', '\App\Http\Controllers\ClientController@create');
Route::post('/page2', '\App\Http\Controllers\CateringController@create');
Route::post('/page3', '\App\Http\Controllers\EmployeeController@create');
Route::post('/page4', '\App\Http\Controllers\SupplierController@create');
Route::post('/page5', '\App\Http\Controllers\InventoryController@create');
Route::post('/page6', '\App\Http\Controllers\ShoppingListController@create');
Route::post('/page7', '\App\Http\Controllers\WorkDetailController@create');
Route::post('/page8', '\App\Http\Controllers\DishesController@create');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/page1-o','\App\Http\Controllers\ClientController@Out');
Route::get('/page2-o','\App\Http\Controllers\CateringController@Out');
Route::get('/page3-o','\App\Http\Controllers\EmployeeController@Out');
Route::get('/page4-o','\App\Http\Controllers\SupplierController@Out');
Route::get('/page5-o','\App\Http\Controllers\InventoryController@Out');
Route::get('/page6-o','\App\Http\Controllers\ShoppingListController@Out');
Route::get('/page7-o','\App\Http\Controllers\WorkDetailController@Out');
Route::get('/page8-o','\App\Http\Controllers\DishesController@Out');
Route::get('/OutUser','\App\Http\Controllers\UserController@Out');


