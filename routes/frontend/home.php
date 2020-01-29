<?php


use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\MembersController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\User\AccountController;
use App\Http\Controllers\Frontend\User\DashboardController;
use App\Http\Controllers\Frontend\User\ProfileController;
use App\Http\Controllers\Backend\EventController;


/*
 * Frontend Controllers
 * All route names are prefixed with 'frontend.'.
 */
Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('contact', [ContactController::class, 'index'])->name('contact');

Route::get('about', [AboutController::class, 'index'])->name('about');

Route::get('/event/{id?}', [EventController::class, 'event'])->name('event');


Route::get('members', [MembersController::class, 'index'])->name('members');
Route::get('members/{member}', [MembersController::class, 'member'])->name('member');



Route::post('contact/send', [ContactController::class, 'send'])->name('contact.send');

/*
 * These frontend controllers require the user to be logged in
 * All route names are prefixed with 'frontend.'
 * These routes can not be hit if the password is expired
 */
Route::group(['middleware' => ['auth', 'password_expires']], function () {
    Route::group(['namespace' => 'User', 'as' => 'user.'], function () {
        // User Dashboard Specific
        Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

        // User Account Specific
        Route::get('account', [AccountController::class, 'index'])->name('account');

        // User Profile Specific
        Route::patch('profile/updatePersonalInfo', [ProfileController::class, 'updatePersonalInfo'])->name('profile.updatePersonalInfo');
        Route::patch('profile/updateCompanyInfo', [ProfileController::class, 'updateCompanyInfo'])->name('profile.updateCompanyInfo');
        Route::patch('profile/updateContactInfo', [ProfileController::class, 'updateContactInfo'])->name('profile.updateContactInfo');

    });
});
