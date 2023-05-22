<?php

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



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
Route::group(['prefix' => LaravelLocalization::setLocale()], function () {
    Route::get('/', function () {
        return redirect('/home');
    });
    // Auth::routes();
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/letter/{id?}', [App\Http\Controllers\HomeController::class, 'letter'])->name('letter');
    Route::get('/about_us', [App\Http\Controllers\HomeController::class, 'about_us'])->name('about_us');
    Route::get('/project/{id?}', [App\Http\Controllers\HomeController::class, 'project'])->name('project');
    Route::get('/contact_us', [App\Http\Controllers\HomeController::class, 'contact_us'])->name('contact_us');
    Route::get('/events', [App\Http\Controllers\HomeController::class, 'events'])->name('events');
    Route::get('/event/{id?}', [App\Http\Controllers\HomeController::class, 'event'])->name('event');

    Route::post('/contact_us', [App\Http\Controllers\HomeController::class, 'contactUs_post'])->name('contactUs_post');

    Route::get('/privacy', [App\Http\Controllers\HomeController::class, 'privacy'])->name('privacy');
});

Route::get('/clear-cache', function () {
    Artisan::call('cache:clear');
    Artisan::call('route:clear');
    echo '<script>alert("cache clear Success")</script>';
});
