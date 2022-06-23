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


Route::controller(App\Http\Controllers\WelcomeController::class)->group(function(){
    Route::get('/', 'index');
    Route::get('/welcome/services/{id}',  'services')->name('services');
    Route::get('/welcome/categorie/',  'categories')->name('categories');
    Route::get('/welcome/form/{id}/{name}',  'formrequest')->name('formrequest');
    Route::get('/welcome/registerpro',  'registerpro')->name('registerproform');
    Route::get('/welcome/register',  'register')->name('registerform');
    Route::get('/welcome/login',  'login')->name('loginform');
});

Route::controller(App\Http\Controllers\CustomerHomeController::class)->group(function(){
    Route::get('/customer-home/service', 'index');
    Route::get('/customer-home/myrequests', 'myrequest');
    Route::get('/customer-home/myprofil', 'myprofil');
    Route::get('/customer-home/payment', 'payment');
    Route::get('/customer-home/form/{id}/{name}',  'customerrequestform')->name('customerrequestform');
});

Route::controller(App\Http\Controllers\WorkerHomeController::class)->group(function(){
    Route::get('/worker-home', 'index');
    Route::get('/worker-home/myoffer', 'myoffer');
    Route::get('/worker-home/myprofil', 'myprofil');
    Route::get('/worker-home/payment', 'payment');
    Route::get('/worker-home/abonnement', 'abonnement');
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


Route::get('/clientit', function () {
    return view('clientit');
});

Route::get('/demande', function () {
    return view('demande');
});
Route::get('/mesdemande', function () {
    return view('mesdemande');
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


route::prefix("administration")->group(function(){
    Route::resource('benefitCategories', App\Http\Controllers\BenefitCategoryController::class);

    Route::resource('serviceOfBenefitCategories', App\Http\Controllers\ServiceOfBenefitCategoryController::class);

    Route::resource('serviceRequests', App\Http\Controllers\ServiceRequestController::class);

    Route::resource('statuses', App\Http\Controllers\StatusController::class);

    Route::resource('serviceProposals', App\Http\Controllers\ServiceProposalController::class);

    Route::resource('userRoles', App\Http\Controllers\UserRoleController::class);

    Route::resource('customers', App\Http\Controllers\CustomerController::class);

    Route::resource('workers', App\Http\Controllers\WorkerController::class);

});



Route::get('/login-customers', function () {
    return view('login');
})->name('customers.login');


Route::get('/register-customers', function () {
    return view('register');
})->name('customers.register');

Route::get('/customer-home', function () {
    //TODO customer home  must be create page
    return view('register');
})->name('customers.home');
