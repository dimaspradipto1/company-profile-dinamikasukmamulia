<?php

use App\Models\Feature;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HeroController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MitraController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FeatureController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\LegalityController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\WeServicesController;
use App\Http\Controllers\HomeServiceController;
use App\Http\Controllers\AboutGalleryController;
use App\Http\Controllers\VisionMisionController;
use App\Http\Controllers\HomepageAboutController;
use App\Http\Controllers\AdvantageServiceController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomepageController::class, 'index'])->name('homepage');
Route::get('homepageabout', [HomepageController::class, 'homepageabout'])->name('homepageabout');
Route::get('homepageservices', [HomepageController::class, 'homepageservices'])->name('homepageservices');
Route::get('homepagegallery', [HomepageController::class, 'homepagegallery'])->name('homepagegallery');
Route::get('homepagecontact', [HomepageController::class, 'homepagecontact'])->name('homepagecontact');


Route::get('login', [LoginController::class, 'login'])->name('login');
Route::post('loginproses', [LoginController::class, 'loginproses'])->name('loginproses');
Route::get('register', [LoginController::class, 'register'])->name('register');
Route::post('registerproses', [LoginController::class, 'registerproses'])->name('registerproses');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');

Route::post('/chatwhatsapp', [ContactController::class, 'chatwhatsapp'])->name('chatwhatsapp');


Route::middleware(['auth'])->group(function(){
  Route::get('admin', [DashboardController::class, 'admin'])->name('admin.admin');
  Route::resource('about', AboutController::class);
  Route::Resource('legality', LegalityController::class);
  Route::resource('visionmision', VisionMisionController::class);
  Route::resource('aboutgallery', AboutGalleryController::class);
  Route::resource('services', ServicesController::class);
  Route::resource('advantageservice', AdvantageServiceController::class);
  Route::resource('weservices', WeServicesController::class);
  Route::resource('gallery', GalleryController::class);
  Route::resource('contact', ContactController::class);

  Route::resource('hero', HeroController::class);
  Route::resource('feature', FeatureController::class);
  Route::resource('homeabout', HomepageAboutController::class);
  Route::resource('homeservice', HomeServiceController::class);
  Route::resource('mitra', MitraController::class);
  Route::resource('customer', CustomerController::class);



  // Route::controller(HomepageController::class)->group(function(){
  //   Route::get('/' , 'index')->name('homepage');
  //   Route::get('homepageabout', 'homepageabout')->name('homepageabout');
  //   Route::get('homepageservices', 'homepageservices')->name('homepageservices');
  //   Route::get('homepagegallery', 'homepagegallery')->name('homepagegallery');
  //   Route::get('homepagecontact', 'homepagecontact')->name('homepagecontact');
  // });
  
});

