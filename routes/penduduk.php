<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PendudukController;


Route::prefix('penduduk')->name('penduduk.')->group(function () {

    Route::middleware(['guest:penduduk','PreventBackHistory'])->group(function () {
        Route::view('/login','back.pages.penduduk.auth.login')->name('login');
        Route::post('/login_handler',[PendudukController::class,'loginHandler'])->name('login_handler');
        Route::view("/forgot-password","back.pages.penduduk.auth.forgot-password")->name("forgot-password");
        Route::post("/send-password-reset-link",[PendudukController::class,"sendPasswordResetLink"])->name("send-password-reset-link");
        Route::get("/password/reset/{token}",[PendudukController::class,"resetPassword"])->name("reset-password");
        Route::post('/reset-password-handler',[PendudukController::class,'resetPasswordHandler'])->name
        ('reset-password-hanlder');
        
    });

    Route::middleware(['auth:penduduk','PreventBackHistory'])->group(function () {
        Route::view('/home','back.pages.penduduk.home')->name('home');
        Route::post('/logout_handler',[PendudukController::class,'logoutHandler'])->name
        ('logout_handler');
        Route::get('/profile',[PendudukController::class,'profileView'])->name('profile');
        Route::get('/home',[PendudukController::class,'showData'])->name('home');
        Route::post('/change-profile-picture',[PendudukController::class,'changeProfilePicture'])->name
        ('change-profile-picture');
        Route::delete('/delete-profile-picture',[PendudukController::class,'deleteProfilePicture'])->name
        ('delete-profile-picture');
        Route::get('/penduduk/{id}/delete', [PendudukController::class, 'delete'])->name('penduduk.delete');
        Route::get('/penduduk/edit/{pendudukId}', 'PendudukController@edit')->name('penduduk.profile');
        Route::get('/penduduk/delete/{id}', 'PendudukController@delete')->name('penduduk.home');
    });
});