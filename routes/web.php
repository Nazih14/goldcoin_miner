<?php
use App\Http\Controllers\Frontend\HomePageController;
use App\Http\Controllers\Admin\TransactionController;
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
Auth::routes();

// HOMEPAGE
Route::get('/', [HomePageController::class, 'index']);
Route::get('/about', [HomePageController::class, 'about']);
Route::get('/gallery', [HomePageController::class, 'gallery']);
Route::get('/event', [HomePageController::class, 'event']);
Route::get('/faq', [HomePageController::class, 'faq']);


// admin area
Route::middleware(['admin', 'auth'])->group(function(){
    Route::prefix('admin')->group(function () {
        Route::get('transactions', [TransactionController::class, 'index']);
    });
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
