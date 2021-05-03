<?php


use App\Http\Controllers\Backend\EventController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\MembersController;
use App\Http\Controllers\Frontend\FrontPagesController;
use App\Http\Controllers\Frontend\User\AccountController;
use App\Http\Controllers\Frontend\User\ProfileController;
use App\Http\Controllers\Frontend\User\DashboardController;


/*
 * Frontend Controllers
 * All route names are prefixed with 'frontend.'.
 */
Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('contact', [ContactController::class, 'index'])->name('contact');

Route::get('about', [AboutController::class, 'index'])->name('about');



Route::get('about/members', [MembersController::class, 'index'])->name('members');
Route::get('about/members/{member}', [MembersController::class, 'member'])->name('member');



Route::get('about/board-of-directors', [FrontPagesController::class, 'board_of_directors'])->name('board_of_directors');


// gallery
Route::get('media-gallery', [FrontPagesController::class, 'gallery'])->name('gallery');





//getting organizational-structure
Route::get('about/organizational-structure', 'FrontPagesController@organizational_structure')->name('organizational_structure');


//getting organizational-structure
Route::get('about/executive-management', 'FrontPagesController@executive_management')->name('executive_management');




//getting bylaws
Route::get('about/bylaws', 'FrontPagesController@bylaws')->name('bylaws');



Route::post('contact/send', [ContactController::class, 'send'])->name('contact.send');



// activities
Route::get('activities', 'FrontPagesController@activities')->name('activities');

//getting all activities by  cliking in activitytype
Route::get('activities/{activitytype}', 'FrontPagesController@activitytype')->name('activitytype');

//getting all activities by  cliking in unittype
Route::get('units/{unittype}', 'FrontPagesController@unittype')->name('unittype');

// activity single
Route::get('activities/single/{activity}', 'FrontPagesController@activity')->name('activity');





// events
Route::get('/events', 'FrontPagesController@events')->name('events');

// event single
Route::get('/events/single/{event?}', 'FrontPagesController@event')->name('event');



// news
Route::get('news', 'FrontPagesController@news')->name('news');
//getting all activities by  cliking in unittype
Route::get('news/unit/{unittype}', 'FrontPagesController@unit_type_news')->name('unit_type_news');
// activity single
Route::get('news/single/{post}', 'FrontPagesController@news_single')->name('new');





//getting terms-of-use
Route::get('/terms-of-use', 'FrontPagesController@terms_of_use')->name('terms_of_use');

//getting terms-of-use
Route::get('/privacy-policy', 'FrontPagesController@privacy_policy')->name('privacy_policy');








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
