<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TemaController;
use App\Http\Controllers\AdminController;

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

//single product
Route::any('/single/{id}', [TemaController::class, 'singolo']);

//routing cart
Route::any('/addcart/{id}', [TemaController::class, 'addCart']);
Route::post('/update_qty/{id}', [TemaController::class, 'update_qty']);
Route::any('/remove/{id}', [TemaController::class, 'remove']);

//area amministrativa
Route::any('/admin', [AdminController::class, 'home']);
Route::any('/loginAmmre', [AdminController::class, 'loginAmmre']);
Route::any('/dashboard', [AdminController::class, 'dashboard']);
Route::any('/creaProdotti', [AdminController::class, 'creaProdotti']);
Route::any('/creaUtenti', [AdminController::class, 'creaUtenti']);
Route::get('/listaUtenti', [AdminController::class, 'listaUtenti']);
Route::get('/ordini', [AdminController::class, 'ordini']);

//gestire UTENTI

//modifica utente
Route::any('/editCustomer/{id}', [AdminController::class, 'editCustomer']);
Route::any('/aggiornaCustomer', [AdminController::class, 'aggiornaCustomer']);
//save user
Route::any('/salvaUtenti', [AdminController::class, 'salvaUtenti']);

//delete user
Route::any('/delete/{id}', [AdminController::class, 'delete']);
//create a new product
Route::any('/salvaProdotto', [AdminController::class, 'salvaProdotto']);

//gestire PRODOTTI
//lista prodotti
Route::get('/listaProdotti', [AdminController::class, 'listaProdotti']);

//modifica prodotto
Route::any('/editProduct/{id}', [AdminController::class, 'editProduct']);
Route::any('/aggiornaProduct', [AdminController::class, 'aggiornaProduct']);

//delete product
Route::any('/deleteProduct/{id}', [AdminController::class, 'deleteProduct']);


