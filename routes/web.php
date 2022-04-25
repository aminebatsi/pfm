<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\RedirectAuthenticatedUsersController;
use App\Http\Livewire\AgriculteurController;
use App\Http\Livewire\ParcelleController;
use App\Http\Livewire\EmployeController;
use App\Http\Livewire\UserController;
use App\Http\Livewire\InterventionController;
use App\Http\Livewire\TarifController;

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

Route::get('/', [UserController::class , 'index']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboardSite');

/*
Route::get('/welcome' , function(){
    return view('welcome');
})->name('welcome');
*/


Route::get('/dash', [RedirectAuthenticatedUsersController::class , 'home'])->middleware(['auth'])->name('main.dashboard');
Route::get('/home', [RedirectAuthenticatedUsersController::class , 'logout']);
Route::get('/login', [RedirectAuthenticatedUsersController::class , 'back'])->name('login');
Route::delete("user/{id}",[UserController::class,'destroy'])->name('user.delete');
Route::delete("agric/{id}",[AgriculteurController::class,'destroy'])->name('agriculteur.destroy');
Route::delete("parcelle/{id}",[ParcelleController::class,'destroy'])->name('parcelle.destroy');
Route::delete("employe/{id}",[EmployeController::class,'destroy'])->name('employe.destroy');
Route::delete("inert/{id}",[InterventionController::class,'destroy'])->name('intervention.destroy');
Route::delete("tarif/{id}",[TarifController::class,'destroy'])->name('tarif.destroy');


require __DIR__.'/auth.php';
