<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InputController;
use App\Http\Controllers\TokoController;
use Illuminate\Support\Facades\Auth;

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

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/input', [InputController::class, 'index']);
Route::post('/output', [InputController::class, 'output']);

Route::prefix('toko')->group(function () {
    Route::get('/', [TokoController::class, 'index']);
    Route::get('/detail', [TokoController::class, 'detail']);
    Route::get('/about', [TokoController::class, 'about']);


    Route::group(['middleware' => ['auth']], function () {
        // Produk
        Route::get('/admin', [TokoController::class, 'admin'])->name('produk.admin');
        Route::get('/create', [TokoController::class, 'create'])->name('produk.create');
        Route::get('/store', [TokoController::class, 'store'])->name('produk.store');
        
        Route::get('/{product}/edit', [TokoController::class, 'edit'])->name('produk.edit');
        Route::delete('/{product}', [TokoController::class, 'destroy'])->name('produk.destroy');
        Route::put('/{product}', [Tokocontroller::class, 'update'])->name('produk.update');

        // Customer

        Route::get('/customers', [TokoController::class, 'customers'])->name('customers.view');
        Route::get('AddCustomer', [TokoController::class, 'AddCustomer'])->name('customers.add');
        Route::post('NewCustomer', [TokoController::class, 'NewCustomer'])->name('customers.new');

        Route::get('/{customer}/editcustomer', [TokoController::class, 'editcustomer'])->name('produk.editcus');
        Route::delete('/{customer}/customers', [TokoController::class, 'destroycustomer'])->name('produk.destroycus');
        Route::put('/{customer}/customers', [Tokocontroller::class, 'updatecustomer'])->name('produk.updatecus');
    });
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
