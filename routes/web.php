<?php
use App\Http\Controllers\Frontend\HomePageController;
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
Route::middleware(['admin', 'auth'])->prefix('admin')->group(function(){
    Route::get('transactions', [App\Http\Controllers\Admin\TransactionController::class, 'index'])->name('admin.transactions');;
    Route::get('dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('profile', [App\Http\Controllers\Admin\UserController::class, 'profile'])->name('admin.profile');
});


// member area
Route::middleware(['auth'])->prefix('member')->group(function(){
    Route::get('dashboard', [App\Http\Controllers\Member\DashboardController::class, 'index'])->name('member.dashboard');
    Route::get('profile', [App\Http\Controllers\Admin\UserController::class, 'profile'])->name('member.profile');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

