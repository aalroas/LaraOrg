<?php

use App\Http\Controllers\Backend\DashboardController;

// All route names are prefixed with 'admin.'.
Route::redirect('/', '/admin/dashboard', 301);
Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');



// blgo
// Route::resource('tag', 'TagController');
Route::resource('post', 'PostController');
// Route::resource('category', 'CategoryController');

Route::delete('post/image/{id}', 'PostController@deleteImage');

Route::resource('forum/category', 'ForumCategoryController');


// teams controller
Route::resource('team', 'TeamController');

// activity
Route::resource('activity', 'ActivityController');
Route::delete('activity/image/{id}', 'ActivityController@deleteImage');

// activity Pages
Route::resource('activitytype', 'ActivityTypeController');


// Units Pages
Route::resource('unittype', 'UnitTypeController');



// sectors and fields
Route::resource('sector', 'SectorController');
Route::resource('field', 'FieldController');

//gallery

Route::resource('gallery', 'GalleryController');
Route::delete('gallery/image/{id}', 'GalleryController@deleteImage');





// contacts form
Route::get('contact_forms', 'Contact_FormsController@index')->name('contact_forms.index');
Route::get('contact_forms/show/{id}', 'Contact_FormsController@show');
Route::delete('contact_forms/{id}', 'Contact_FormsController@destroy');



// settings
Route::get('setting', 'SettingController@edit')->name('setting.edit');
Route::post('setting', 'SettingController@updateSiteInfo')->name('setting.UpdateSiteInfo');


// static pages
Route::get('static', 'StaticPagesController@edit')->name('static.edit');
Route::post('static/genaral', 'StaticPagesController@updategeneral')->name('static.updategeneral');
Route::post('static/org', 'StaticPagesController@updateorg')->name('static.updateorg');
Route::post('static/privacy', 'StaticPagesController@updateprivacy')->name('static.updateprivacy');
Route::post('static/terims', 'StaticPagesController@updateterims')->name('static.updateterims');


// About Controller
Route::get('about', 'AboutController@edit')->name('about.edit');
Route::post('about', 'AboutController@update')->name('about.update');

//Event Controller
Route::get('events/{id}', 'EventController@show')->where('id', '[0-9]+');
Route::resource('events', 'EventController');




// slider
Route::resource('slider', 'SliderController');

// testimonials
Route::resource('testimonial', 'TestimonialController');
