<?php

use App\Http\Controllers\ResellerController;
use App\Http\Controllers\DisplayController;
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

Route::redirect('/', '/displays');

Route::resource('displays', DisplayController::class);


// Route::prefix('new')->group(function() {
   // Route::get('/reseller', [App\Http\Controllers\ResellerController::class, 'new']);
   // Route::post('/reseller', [App\Http\Controllers\ResellerController::class, 'add'])->name('new_reseller');
// });