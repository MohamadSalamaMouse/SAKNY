<?php

use App\Http\Controllers\AdminAuth\AuthenticatedSessionController;
use App\Http\Controllers\AdminAuth\RegisteredUserController;
use App\Http\Controllers\dashboard\AdminController;
use App\Http\Controllers\dashboard\MsessageController;
use App\Http\Controllers\dashboard\UserController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::prefix('admin')->name('admin.')->group(function (){
    Route::middleware('isAdmin')->group(function (){
        Route::get('register', [RegisteredUserController::class, 'create'])->name('register');
        Route::post('register', [RegisteredUserController::class, 'store']);
        Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
        Route::get('/',function (){return view('admin.master');})->name('index');
       //get all admins
        Route::get('admins',[AdminController::class,'index'])->name('admins');
        //delete admin
        Route::delete('admins/{id}',[AdminController::class,'destroy'])->name('destroy');
        // search for admin
        Route::post('search',[AdminController::class,'search'])->name('search');

        //get all users
        Route::get('users',[UserController::class,'index'])->name('users');
        // search for users
        Route::post('user/search',[UserController::class,'search'])->name('user.search');
        //delete user with id
        Route::delete('user/{id}',[UserController::class,'destroy'])->name('user.destroy');

        //get all messages
        Route::get('messages',[MsessageController::class,'index'])->name('messages');
        // search for messages
        Route::post('message/search',[MsessageController::class,'search'])->name('message.search');
        //delete message with id
        Route::delete('message/{id}',[MsessageController::class,'destroy'])->name('message.destroy');

    });
    require __DIR__.'/admin_auth.php';
});


