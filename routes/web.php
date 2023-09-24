<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CurrencyController;
use App\Http\Controllers\EventTypeController;
use App\Http\Controllers\PaymentMethodController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RateController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\TicketTypeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/admin', [AdminController::class,'index']);

Route::get('/admin/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::get('/admin/categories/create', [CategoryController::class, 'create'])->name('categories.create');
Route::post('/admin/categories', [CategoryController::class, 'store'])->name('categories.store');
Route::get('/admin/categories/{category}', [CategoryController::class, 'show'])->name('categories.show');
Route::get('/admin/categories/{category}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
Route::put('/admin/categories/{category}', [CategoryController::class, 'update'])->name('categories.update');
Route::delete('/admin/categories/{category}', [CategoryController::class, 'destroy'])->name('categories.destroy');

Route::get('/admin/subcategories/{category}/index', [SubCategoryController::class, 'index'])->name('subcategories.index');
Route::post('/admin/subcategories', [SubCategoryController::class, 'store'])->name('subcategories.store');
Route::get('/admin/subcategories/{subCategory}', [SubCategoryController::class, 'show'])->name('subcategories.show');
Route::get('/admin/subcategories/{subCategory}/edit', [SubCategoryController::class, 'edit'])->name('subcategories.edit');
Route::put('/admin/subcategories/{subCategory}', [SubCategoryController::class, 'update'])->name('subcategories.update');
Route::delete('/admin/subcategories/{subCategory}', [SubCategoryController::class, 'destroy'])->name('subcategories.destroy');

Route::resource('/admin/event_types', EventTypeController::class);
Route::resource('/admin/ticket_types', TicketTypeController::class);
Route::resource('/admin/currencies', CurrencyController::class);
Route::resource('/admin/payment_methods', PaymentMethodController::class);

Route::get('/admin/rates', [RateController::class, 'index'])->name('rates.index');
Route::get('/admin/rates/create', [RateController::class, 'create'])->name('rates.create');
Route::post('/admin/rates', [RateController::class, 'store'])->name('rates.store');
Route::get('/admin/rates/{id}/edit', [RateController::class, 'edit'])->name('rates.edit');
Route::put('/admin/rates/{id}', [RateController::class, 'update'])->name('rates.update');

Route::resource('/admin/roles', RoleController::class);
Route::resource('/admin/permissions', PermissionController::class);

// Create Event
Route::resource('/admin/events', \App\Http\Controllers\EventController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
