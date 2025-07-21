<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\CommandeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CarinformationController;
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('admin.admin');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    // Route Go To Form Add New Car From Admin
    Route::get('/addNewCar', function () {
        return view('admin.addNewCar');
    })->name('addNewCar');
    // Route Go To Form Update Car From Admin updateCar
    Route::get('/updateCar', [CarController::class, 'updateCarAffichage'])->name('updateCar');
    // Route Add New Car In BD
    Route::post('/addCarFrm', [CarController::class, 'AddNewCar'])->name('addCarFrm');
    // delete car
    Route::delete('/delete-car/{id}', [CarController::class, 'deleteCar'])->name('delete-car');
    // go to form update
    Route::post('/update-car/{id}', [CarController::class, 'updateCarForm'])->name('update-car');
    // route update updateCarFrm
    Route::post('/updateCarFormInsert/{id}', [CarController::class, 'updateCarFormInsert'])->name('updateCarFormInsert');
    // commandesAdmin Admiiin
    Route::get('/commandesAdmin', [CommandeController::class, 'showCommande'])->name('commandesAdmin');
    // go to page updateCommande Admiiin
    Route::get('/updateCommande/{id}', [CommandeController::class, 'updateCommande'])->name('updateCommande');
    // updateCommandeFrm Admiin
    Route::post('/updateCommandeAction/{id}', [CommandeController::class, 'updateCommandeAction'])->name('updateCommandeAction');
    // delete Commande deleteCommande
    Route::put('/deleteCommande/{id}', [CommandeController::class, 'deleteCommande'])->name('deleteCommande');
    // show messages Admiin showMessage
    Route::get('/showMessage', [ContactController::class, 'showMessages'])->name('showMessage');
    // Add Option Car addOptionCar (Form)
    Route::get('/addOptionCar', [CarController::class, 'addOptionCarAffichage'])->name('addOptionCar');
    // addOption
    Route::post('/formOption/{id}', [CarinformationController::class, 'formOption'])->name('formOption');
    // addOption
    Route::post('/addOption/{id}', [CarinformationController::class, 'addOption'])->name('addOption');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
});

require __DIR__.'/auth.php';

// home (affiche Cars)
Route::get('/', [CarController::class, 'showCarsHome'])->name('home');


// admin
Route::get('/admin', function () {
    return view('auth.login');
});

// Admin Component (ghi bilama)
// Route::get('/compo', function () {
//     return view('components.adminCompo.adminComponent');
// });


// See All Cars seeAllCars (LiveWire)
Route::get('/seeAllCars', [CarController::class, 'SeeAllCars'])->name('seeAllCars');
// Commande commande
Route::get('/commande-frm/{id}', [CarController::class, 'goCommandePage'])->name('commande-frm');
// Commande Car From Formulaire commandeCar
Route::post('/commandeCar/{id}', [CommandeController::class, 'commandeConfirme'])->name('commandeCar');
// contact
Route::post('/contact', [ContactController::class, 'contact'])->name('contact');