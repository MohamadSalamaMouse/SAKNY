<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\SearchController;
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


//home page
Route::get('/',[HomeController::class,'index'])->name('home_page');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('contact',[MessageController::class,'index'])->name('contact');
Route::post('contact',[MessageController::class,'store'])->name('contact.store');
Route::get('contact/about',[MessageController::class,'about'])->name('contact.about');
//search
Route::get('search',[SearchController::class,'index'])->name('search.index');
Route::get('/property', [PropertyController::class,'index'])->middleware(['auth', 'verified'])->name('property');
Route::post('/property/store', [PropertyController::class,'store'])->middleware(['auth', 'verified'])->name('property.store');
Route::get('listings',[PropertyController::class,'all_listings'])->name('all listings');
Route::get('view_property/{id}',[PropertyController::class,'view_property'])->name('view_property');


require __DIR__.'/auth.php';

require __DIR__.'/admin.php';
