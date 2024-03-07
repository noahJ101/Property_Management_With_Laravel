<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\AdminController;

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




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->name('dashboard');


route::get('/redirect', [HomeController::class, 'redirect']);

route::get('/', [HomeController::class, 'index']);

route::get('/about', [HomeController::class, 'about']);

route::get('/contact', [HomeController::class, 'contact']);

route::get('/services', [HomeController::class, 'services']);

route::get('/properties', [HomeController::class, 'properties']);

route::get('/single_property/{id}', [HomeController::class, 'single_property']);

route::post('/add_comment', [HomeController::class, 'add_comment']);

route::post('/add_reply', [HomeController::class, 'add_reply']);

route::get('/search', [HomeController::class, 'search']);

route::get('/view_location', [AdminController::class, 'view_location']);

route::post('/add_location', [AdminController::class, 'add_location']);

route::get('/delete_location/{id}', [AdminController::class, 'delete_location']);

route::get('/view_property', [AdminController::class, 'view_property']);

route::post('/add_property', [AdminController::class, 'add_property']);

route::get('/show_property', [AdminController::class, 'show_property']);

route::get('/delete_property/{id}', [AdminController::class, 'delete_property']);

route::get('/update_property/{id}', [AdminController::class, 'update_property']);

route::post('/update_property_confirm/{id}', [AdminController::class, 'update_property_confirm']);