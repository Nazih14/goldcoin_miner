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
Auth::routes(['verify'=>true]);

// HOMEPAGE
Route::get('/', [HomePageController::class, 'index']);
Route::get('/about', [HomePageController::class, 'about']);
Route::get('/gallery', [HomePageController::class, 'gallery']);
Route::get('/event', [HomePageController::class, 'event']);
Route::get('/faq', [HomePageController::class, 'faq']);


// admin area
Route::middleware(['admin', 'auth', 'verified'])->prefix('admin')->group(function(){
    
    Route::prefix('transactions')->group(function (){
        Route::get('/', [App\Http\Controllers\Admin\TransactionController::class, 'index'])->name('admin.transactions');        
        Route::get('/create', [App\Http\Controllers\Admin\TransactionController::class, 'create'])->name('transactions.create');        
        Route::post('/save', [App\Http\Controllers\Admin\TransactionController::class, 'store'])->name('transactions.store');        
        Route::get('/edit/{id}', [App\Http\Controllers\Admin\TransactionController::class, 'edit'])->name('transactions.edit');        
        Route::put('/update', [App\Http\Controllers\Admin\TransactionController::class, 'update'])->name('transactions.update');        
        Route::get('/delete/{id}', [App\Http\Controllers\Admin\TransactionController::class, 'destroy'])->name('transactions.destroy');        
    });


    Route::get('dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('admin.dashboard');
});

// mix
Route::middleware(['auth'])->prefix('admin')->group(function(){
    Route::get('profile', [App\Http\Controllers\Admin\UserController::class, 'profile'])->name('admin.profile');
    Route::put('user', [App\Http\Controllers\Admin\UserController::class, 'update'])->name('user.update');
}); 

// member area
Route::middleware(['auth', 'verified'])->prefix('member')->group(function(){
    Route::get('dashboard', [App\Http\Controllers\Member\DashboardController::class, 'index'])->name('member.dashboard');
    Route::get('profile', [App\Http\Controllers\Admin\UserController::class, 'profile'])->name('member.profile');
    Route::prefix('transactions')->group(function (){
        Route::get('/', [App\Http\Controllers\Admin\TransactionController::class, 'index'])->name('admin.transactions');        
    });
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('verified');

