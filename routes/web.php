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

Route::get('/',  [App\Http\Controllers\WelcomeController::class, 'index']);
Route::controller(App\Http\Controllers\WelcomeController::class)->group(function(){
    Route::get('/welcome/services/{id}',  'services')->name('services');
    Route::get('/welcome/categorie/',  'categories')->name('categories');
    Route::get('/welcome/form/{id}/{name}',  'formrequest')->name('formrequest');
    Route::get('/welcome/registerpro',  'registerpro')->name('registerproform');
    Route::get('/welcome/register',  'register')->name('registerform');
    Route::get('/welcome/login',  'login')->name('loginform');
});



Route::get('/detailservice', function () {
    return view('sousservice');
});

Route::get('/servicesingle', function () {
    return view('servicesingle');
});
Route::get('/listeservice', function () {
    return view('service');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/clientit', function () {
    return view('clientit');
});

Route::get('/demande', function () {
    return view('demande');
});
Route::get('/mesdemande', function () {
    return view('mesdemande');
});

Route::get('/register', function () {
    return view('register');
});
Route::get('/registerpresta', function () {
    return view('registerpresta');
});
Route::get('/pay', function () {
    return view('pay');
});

Route::get('/detaildemande', function () {
    return view('detaildemande');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();


Route::resource('workers', App\Http\Controllers\WorkerController::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();


Route::resource('benefitCategories', App\Http\Controllers\BenefitCategoryController::class);


Route::resource('serviceOfBenefitCategories', App\Http\Controllers\ServiceOfBenefitCategoryController::class);


Route::resource('serviceRequests', App\Http\Controllers\ServiceRequestController::class);


Route::resource('statuses', App\Http\Controllers\StatusController::class);


Route::resource('serviceProposals', App\Http\Controllers\ServiceProposalController::class);


Route::resource('userRoles', App\Http\Controllers\UserRoleController::class);


