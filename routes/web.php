<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\AndyController@index')->name('index');
Route::get('company', 'App\Http\Controllers\AndyController@company')->name('company');
Route::get('contact', 'App\Http\Controllers\AndyController@contact')->name('contact');
Route::get('recruit', 'App\Http\Controllers\AndyController@recruit')->name('recruit');
Route::get('stylebook', 'App\Http\Controllers\AndyController@stylebook')->name('stylebook');

Route::post('mail_send', 'App\Http\Controllers\AndyController@mail_send')->name('mail_send');

Route::get('store_list', 'App\Http\Controllers\StoreController@index')->name('store.index');
Route::get('store/{id}', 'App\Http\Controllers\StoreController@show')->name('store.show');
Route::get('brand/{url}', 'App\Http\Controllers\BrandController@show')->name('brand.show');
Route::get('stylebook/{url}', 'App\Http\Controllers\BrandController@stylebook')->name('stylebook.show');
Route::get('pickup', 'App\Http\Controllers\PickupController@index')->name('pickup');
Route::get('pickup/{id}', 'App\Http\Controllers\PickupController@show')->name('pickup.show');
Route::get('news', 'App\Http\Controllers\NewsController@index')->name('news');
Route::get('news/{id}', 'App\Http\Controllers\NewsController@show')->name('news.show');

Route::get('anime_test', 'App\Http\Controllers\AndyController@anime_test')->name('anime_test');



// 管理側
Route::get('admin/', 'App\Http\Controllers\AdminController@index')->name('admin.index');

Route::get('admin/item_list', 'App\Http\Controllers\ItemController@item_list')->name('admin.item_list')->middleware('login');
Route::get('admin/item_regist', 'App\Http\Controllers\ItemController@item_regist')->name('admin.item_regist')->middleware('login');
Route::post('admin/item_store', 'App\Http\Controllers\ItemController@item_store')->name('admin.item_store')->middleware('login');
Route::get('admin/item_edit/{id}/', 'App\Http\Controllers\ItemController@item_edit')->name('admin.item_edit')->middleware('login');
Route::post('admin/item_update', 'App\Http\Controllers\ItemController@item_update')->name('admin.item_update')->middleware('login');
Route::get('admin/item_delete/{id}/', 'App\Http\Controllers\ItemController@item_delete')->name('admin.item_delete')->middleware('login');

Route::get('admin/event_list', 'App\Http\Controllers\EventController@event_list')->name('admin.event_list')->middleware('login');
Route::get('admin/event_regist', 'App\Http\Controllers\EventController@event_regist')->name('admin.event_regist')->middleware('login');
Route::post('admin/event_store', 'App\Http\Controllers\EventController@event_store')->name('admin.event_store')->middleware('login');
Route::get('admin/event_edit/{id}/', 'App\Http\Controllers\EventController@event_edit')->name('admin.event_edit')->middleware('login');
Route::post('admin/event_update', 'App\Http\Controllers\EventController@event_update')->name('admin.event_update')->middleware('login');
Route::get('admin/event_delete/{id}/', 'App\Http\Controllers\EventController@event_delete')->name('admin.event_delete')->middleware('login');

Route::get('admin/course_list', 'App\Http\Controllers\CourseController@course_list')->name('admin.course_list')->middleware('login');
Route::get('admin/course_regist', 'App\Http\Controllers\CourseController@course_regist')->name('admin.course_regist')->middleware('login');
Route::post('admin/course_store', 'App\Http\Controllers\CourseController@course_store')->name('admin.course_store')->middleware('login');
Route::get('admin/course_edit/{id}/', 'App\Http\Controllers\CourseController@course_edit')->name('admin.course_edit')->middleware('login');
Route::post('admin/course_update', 'App\Http\Controllers\CourseController@course_update')->name('admin.course_update')->middleware('login');
Route::get('admin/course_delete/{id}/', 'App\Http\Controllers\CourseController@course_delete')->name('admin.course_delete')->middleware('login');

Route::get('admin/practice_list', 'App\Http\Controllers\PracticeController@practice_list')->name('admin.practice_list')->middleware('login');
Route::get('admin/practice_regist', 'App\Http\Controllers\PracticeController@practice_regist')->name('admin.practice_regist')->middleware('login');
Route::post('admin/practice_store', 'App\Http\Controllers\PracticeController@practice_store')->name('admin.practice_store')->middleware('login');
Route::get('admin/practice_edit/{id}/', 'App\Http\Controllers\PracticeController@practice_edit')->name('admin.practice_edit')->middleware('login');
Route::post('admin/practice_update', 'App\Http\Controllers\PracticeController@practice_update')->name('admin.practice_update')->middleware('login');
Route::get('admin/practice_delete/{id}/', 'App\Http\Controllers\PracticeController@practice_delete')->name('admin.practice_delete')->middleware('login');

Route::get('admin/news_list', 'App\Http\Controllers\NewsController@news_list')->name('admin.news_list')->middleware('login');
Route::get('admin/news_regist', 'App\Http\Controllers\NewsController@news_regist')->name('admin.news_regist')->middleware('login');
Route::post('admin/news_store', 'App\Http\Controllers\NewsController@news_store')->name('admin.news_store')->middleware('login');
Route::get('admin/news_edit/{id}/', 'App\Http\Controllers\NewsController@news_edit')->name('admin.news_edit')->middleware('login');
Route::post('admin/news_update', 'App\Http\Controllers\NewsController@news_update')->name('admin.news_update')->middleware('login');
Route::get('admin/news_delete/{id}/', 'App\Http\Controllers\NewsController@news_delete')->name('admin.news_delete')->middleware('login');

Route::get('admin/pickup_list', 'App\Http\Controllers\PickupController@pickup_list')->name('admin.pickup_list')->middleware('login');
Route::get('admin/pickup_regist', 'App\Http\Controllers\PickupController@pickup_regist')->name('admin.pickup_regist')->middleware('login');
Route::post('admin/pickup_store', 'App\Http\Controllers\PickupController@pickup_store')->name('admin.pickup_store')->middleware('login');
Route::get('admin/pickup_edit/{id}/', 'App\Http\Controllers\PickupController@pickup_edit')->name('admin.pickup_edit')->middleware('login');
Route::post('admin/pickup_update', 'App\Http\Controllers\PickupController@pickup_update')->name('admin.pickup_update')->middleware('login');
Route::get('admin/pickup_delete/{id}/', 'App\Http\Controllers\PickupController@pickup_delete')->name('admin.pickup_delete')->middleware('login');

Route::POST('/admin_login', 'App\Http\Controllers\AndyController@login')->name('admin.login');
Route::get('/admin_logout', 'App\Http\Controllers\AndyController@logout')->name('admin.logout')->middleware('login');

// ログイン
Route::get('admin/login', function () {return view('admin/login'); });

// Route::get('/admin_logout', 'App\Http\Controllers\AdminController@logout')->name('admin.logout')->middleware('login');