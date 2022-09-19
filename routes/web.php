<?php

use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\NiveauScolaireController;
use Illuminate\Support\Facades\Route;

//use Inertia\Inertia;
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

Route::get('/', function () {
    //return view('welcome');
    return inertia("Home");
})->name("home");

/*
Route::get('/contact', function () {
    return inertia("Contact");
})->name("contact");
*/

Route::get('/etudiant', [EtudiantController::class, "index"])->name("etudiant.index");
Route::get('/etudiant/create', [EtudiantController::class, "create"])->name("etudiant.create");
//Route::get('/etudiant/edit', [EtudiantController::class, "edit"])->name("etudiant.edit");
Route::get('/niveauscolaire', [NiveauScolaireController::class, "index"])->name("niveauscolaire.index");
//Route::get('/niveauscolaire/create', [NiveauScolaireController::class, "create"])->name("niveauscolaire.create");
