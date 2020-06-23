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



// Admin
Route::get('login', 'TokoRentalController@login')->name('login');
Route::post('store-login', 'TokoRentalController@storeLogin')->name('store-login');
Route::get('register', 'TokoRentalController@register')->name('register');
Route::post('store-register', 'TokoRentalController@storeRegister')->name('store-register');
Route::get('admin-form', 'TokoRentalController@create')->name('admin-form');
Route::get('dashboard', 'TokoRentalController@index')->name('dashboard');
Route::post('store-form', 'TokoRentalController@store')->name('admin-store');
Route::get('/', 'TokoRentalController@data')->name('home');


Route::get('team', 'RentalController@team')->name('team');
// Route::get('home', 'RentalController@index')->name('home');
Route::get('about', 'RentalController@about')->name('about');
Route::get('blog', 'RentalController@blog')->name('blog-home');
Route::get('contact', 'RentalController@contact')->name('contact');
Route::get('service', 'RentalController@service')->name('service');

// Form
Route::get('form', 'RentalController@create')->name('form');
Route::post('form', 'RentalController@store')->name('store');

// Raja Sewa Mobil
Route::get('cars-1', 'RentalController@carsRaja')->name('cars-raja');
Route::get('detail-ertiga2', 'RentalController@detailErtigaDua')->name('detail-ertiga2');
Route::get('detail-avanza3', 'RentalController@detailAvanzaTiga')->name('detail-avanza3');
Route::get('detail-expander2', 'RentalController@detailExpanderDua')->name('detail-expander2');

// Platinum rent car
Route::get('cars-2', 'RentalController@carsPlatinum')->name('cars-platinum');
Route::get('detail-xenia', 'RentalController@detailXenia')->name('detail-xenia');
Route::get('detail-avanza2', 'RentalController@detailAvanzaDua')->name('detail-avanza2');
Route::get('detail-expander', 'RentalController@detailExpander')->name('detail-expander');

// Bintangmas rent car
Route::get('cars-3', 'RentalController@carsBintangMas')->name('cars-bintangmas');
Route::get('detail-jazz2', 'RentalController@detailJazzDua')->name('detail-jazz2');
Route::get('detail-alphard', 'RentalController@detailAlphard')->name('detail-alphard');
Route::get('detail-ertiga3', 'RentalController@detailErtigaTiga')->name('detail-ertiga3');

// Keken rent car
Route::get('cars-4', 'RentalController@carsKeken')->name('cars-keken');
Route::get('detail-ayla', 'RentalController@detailAyla')->name('detail-ayla');
Route::get('detail-avanza', 'RentalController@detailAvanza')->name('detail-avanza');
Route::get('detail-ertiga', 'RentalController@detailErtiga')->name('detail-ertiga');

// Cakra rent car
Route::get('cars-5', 'RentalController@carsCakra')->name('cars-cakra');
Route::get('detail-rush', 'RentalController@detailRush')->name('detail-rush');
Route::get('detail-inova', 'RentalController@detailInova')->name('detail-inova');
Route::get('detail-fortuner3', 'RentalController@detailFortunerTiga')->name('detail-fortuner3');

// Artharent car
Route::get('cars-6', 'RentalController@carsArtharent')->name('cars-artharent');
Route::get('detail-fortuner2', 'RentalController@detailFortunerDua')->name('detail-fortuner2');
Route::get('detail-yaris', 'RentalController@detailYaris')->name('detail-yaris');
Route::get('detail-jazz', 'RentalController@detailJazz')->name('detail-jazz');

