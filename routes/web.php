<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\MealsmenuController;

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

Route::controller(FrontController::class)->name('front.')->group(function(){

Route::get('/','index')->name('index');
Route::get('/about','about')->name('about');
Route::get('/service','service')->name('service');
Route::get('/menu','menu')->name('menu');
Route::get('/contact','contact')->name('contact');
Route::get('/booking','booking')->name('booking');
// Route::post('/booking/store','store')->name('store');


});

Route::name('admin.')->prefix('admin')->group(function(){

    
    Route::middleware('auth')->group(function(){
        
        Route::view('/','admin.index')->name('index');
        Route::controller(BookingController::class)->group(function(){

          Route::resource('booking',BookingController::class);  

          
        });
        Route::controller(MenuController::class)->group(function(){
          
          Route::get('/menu/breakfast', [MenuController::class, 'breakfast'])->name('menu.breakfast');
          Route::get('/menu/lunch', [MenuController::class, 'lunch'])->name('menu.lunch');
          Route::get('/menu/dinner', [MenuController::class, 'dinner'])->name('menu.dinner');
          Route::resource('menu',MenuController::class);  
          
        });

        Route::controller(SettingController::class)->group(function(){

          Route::resource('settings',SettingController::class);  

          
        });
        Route::controller(MessageController::class)->group(function(){

          Route::resource('messages',MessageController::class);  

          
        });



      });
    
    require __DIR__.'/auth.php';
    
    

});









