<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TemaController;

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

/* Route::get('/', function () {
    return view('front/home');
});
 */

Route::get('/', [TemaController::class, 'home']);
Route::get('/mail', [TemaController::class, 'mail']);
Route::get('/about', [TemaController::class, 'about']);
Route::any('/cart', [TemaController::class, 'cart']);
Route::get('/pagamenti', [TemaController::class, 'pagamenti']);
Route::get('/shop', [TemaController::class, 'shop']);
Route::any('/login', [TemaController::class, 'login']);