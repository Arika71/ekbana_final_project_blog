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


Route::get('/', [App\Http\Controllers\LandingController::class, 'index'])->name('welcome');
Route::get('/about', [App\Http\Controllers\LandingController::class, 'about'])->name('about');
Route::get('/contact', [App\Http\Controllers\LandingController::class, 'contact'])->name('contact');
Route::get('/blogList', [App\Http\Controllers\LandingController::class, 'blog'])->name('blog.list');
Route::get('/singleBlog/{id}', [App\Http\Controllers\LandingController::class, 'show'])->name('single.blog');




Route::prefix('admin')->middleware('auth','isAdmin')->group(function(){
    Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('Dashboard.index');


      // Admin Route Start
      Route::get('admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.index');
      Route::get('admin/create', [App\Http\Controllers\AdminController::class, 'create'])->name('admin.create');
      Route::post('admin/store', [App\Http\Controllers\AdminController::class, 'store'])->name('admin.store');
      Route::get('admin/{id}/edit', [App\Http\Controllers\AdminController::class, 'edit'])->name('admin.edit');
      Route::put('admin/{id}', [App\Http\Controllers\AdminController::class, 'update'])->name('admin.update');
      Route::delete('admin/{id}', [App\Http\Controllers\AdminController::class, 'destroy'])->name('admin.destroy');
      Route::get('admin/{id}', [App\Http\Controllers\AdminController::class, 'show'])->name('admin.show');
      // Admin Route end


       // User Route Start
    Route::get('user', [App\Http\Controllers\UserController::class, 'index'])->name('user.index');
    Route::get('user/{id}', [App\Http\Controllers\UserController::class, 'show'])->name('user.show');
    // User Route end


     // category Route
     Route::resource('category', App\Http\Controllers\CategoryController::class);
     // Category Route end

    //  Blog Route
    Route::resource('blog', App\Http\Controllers\BlogsController::class);
    // Blog Route End

    Route::get('profile', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile.index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




Route::prefix('')->middleware('auth')->group(function(){

  Route::resource('comment', App\Http\Controllers\CommentsController::class);
});


Route::get('/sendmail',function(){
  $mailData = [
    "name" => "test Name",
    "dob" => "test dob",
  ];

  Mail::to("arikakarki02@gmail.com")->send(new \App\Mail\TestEmail($mailData));
  dd('sent successfully');
});
