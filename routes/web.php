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

// ---------------------------------area FRONT----------------------
Route::get('/', [TemaController::class, 'home']);
Route::get('/mail', [TemaController::class, 'mail']);
Route::get('/about', [TemaController::class, 'about']);
Route::any('/cart', [TemaController::class, 'cart']);
Route::get('/pagamenti', [TemaController::class, 'pagamenti']);
Route::get('/shop', [TemaController::class, 'shop']);


//------------------------------area AMMINISTRAZIONE--------------------
Route::any('/admin', [AdminController::class, 'home']);
Route::any('/loginAmmre', [AdminController::class, 'loginAmmre']);
Route::any('/dashboard', [AdminController::class, 'dashboard']);
Route::any('/creaProdotti', [AdminController::class, 'creaProdotti']);
Route::any('/creaUtenti', [AdminController::class, 'creaUtenti']);
Route::any('/listaUtenti', [AdminController::class, 'listaUtenti']);
Route::any('/logoutAdmin', [AdminController::class, 'logoutAdmin']);


//------------------------------------------gestire UTENTI--------------------

//registra utente
Route::any('/registrati', [TemaController::class, 'registrati']);
//login utente
Route::any('/login', [TemaController::class, 'login']);
Route::any('/accesso', [TemaController::class, 'accesso']);
//logout utente
Route::any('/logout', [TemaController::class, 'logout']);
//aggiorna utente
Route::any('/completaDati/{id}', [TemaController::class, 'completaDati']);
//modifica utente
Route::any('/editCustomer/{id}', [AdminController::class, 'editCustomer']);
Route::any('/aggiornaCustomer', [AdminController::class, 'aggiornaCustomer']);
//save user
Route::any('/salvaUtenti', [AdminController::class, 'salvaUtenti']);

//delete user
Route::any('/delete/{id}', [AdminController::class, 'delete']);


//-------------------------------------gestire PRODOTTI------------------
//lista prodotti
Route::get('/listaProdotti', [AdminController::class, 'listaProdotti']);
//create a new product
Route::any('/salvaProdotto', [AdminController::class, 'salvaProdotto']);

//modifica prodotto
Route::any('/editProduct/{id}', [AdminController::class, 'editProduct']);
Route::any('/aggiornaProduct', [AdminController::class, 'aggiornaProduct']);

//delete product
Route::any('/deleteProduct/{id}', [AdminController::class, 'deleteProduct']);

//single product
Route::any('/single/{id}', [TemaController::class, 'singolo']);


//----------------------------------------Gestire CART---------------------
Route::any('/addcart/{id}', [TemaController::class, 'addCart']);
Route::post('/update_qty/{id}', [TemaController::class, 'update_qty']);
Route::any('/remove/{id}', [TemaController::class, 'remove']);
Route::any('/ProcediOrdine', [TemaController::class, 'ProcediOrdine']);

//--------------------------Gestire ORDINI e PAGAMENTI--------------------------
//Route::get('/ordini', [AdminController::class, 'ordini']);
Route::any('/ordini', [AdminController::class, 'listaOrdini']);
//--------------------------Gestire PAGAMENTI------------------------
Route::any('/grazie', [TemaController::class, 'grazie']);
//---------------------------------MAIL------------------
Route::any('/contatti', [TemaController::class, 'contatti']);
// Route::any('/dynamic_email_template.blade', [TemaController::class, 'dynamic_email_template.blade']);
