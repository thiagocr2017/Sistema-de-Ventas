<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\v1\UserController;
use App\Http\Controllers\v1\CategoryController;
use App\Http\Controllers\v1\ProviderController;
use App\Http\Controllers\v1\ProductController;
use App\Http\Controllers\v1\ClientController;
use App\Http\Controllers\v1\PurchaseController;
use App\Http\Controllers\v1\SaleController;

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


Route::resources([
    'user'       => UserController::class,
    'categories' => CategoryController::class,
    'providers'  => ProviderController::class,
    'products'   => ProductController::class,
    'clients'    => ClientController::class,
    'purchases'  => PurchaseController::class,
    'sales'      => SaleController::class,
]);

