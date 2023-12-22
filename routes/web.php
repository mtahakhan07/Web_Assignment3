<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

// Apply the middleware to routes
Route::middleware(['auth', 'evaluator'])->group(function () {
    // Define your routes here
    Route::get('/evaluator/preferences', 'EvaluatorPreferencesController@index')->name('evaluator.preferences');
    Route::get('/evaluator/preferences/edit', 'EvaluatorPreferencesController@edit')->name('evaluator.preferences.edit');
    Route::post('/evaluator/preferences/update', 'EvaluatorPreferencesController@update')->name('evaluator.preferences.update');
});

Route::middleware('auth')->group(function () {
    // View evaluator preferences
    Route::get('/evaluator/preferences', 'EvaluatorPreferencesController@index')->name('evaluator.preferences');

    // Edit evaluator preferences (show form)
    Route::get('/evaluator/preferences/edit', 'EvaluatorPreferencesController@edit')->name('evaluator.preferences.edit');

    // Update evaluator preferences
    Route::patch('/evaluator/preferences', 'EvaluatorPreferencesController@update')->name('evaluator.preferences.update');
});

// List all projects
Route::get('/projects', 'App\Http\Controllers\ProjectController@index');

// Add a new project (show form)
Route::get('/projects/create', 'App\Http\Controllers\ProjectController@create');
Route::post('/projects', 'App\Http\Controllers\ProjectController@store');

// Edit an existing project (show form)
Route::get('/projects/{id}/edit', 'App\Http\Controllers\ProjectController@edit');
Route::put('/projects/{id}', 'App\Http\Controllers\ProjectController@update');

// Delete a project
Route::delete('/projects/{id}', 'App\Http\Controllers\ProjectController@destroy');


Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/home',[HomeController::class,'index'])->middleware('auth')->name('home');
   

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/projects/{projectId}/evaluations', [ProjectController::class, 'showEvaluations'])->name('projects.showEvaluations');


require __DIR__.'/auth.php';
