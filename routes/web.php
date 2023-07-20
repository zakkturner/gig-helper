<?php

use App\Http\Controllers\JobsController;
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Models\Jobs;
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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard', [
        'jobs' => Jobs::all()
    ]);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('/jobs', JobsController::class)->except('edit');
});





// Route::get('/jobs', [JobsController::class, 'index'])->middleware(['auth'])->name('jobs.index');
// Route::get('/jobs/create', [JobsController::class, 'create'])->middleware(['auth'])->name('jobs.create');
// Route::get('/jobs/{id}', [JobsController::class, 'show'])->middleware(['auth']);
// Route::delete('/jobs/{job}', [JobsController::class, 'destroy'])->middleware(['auth'])->name('jobs.destroy');
// Route::put('/jobs/{job}', [JobsController::class, 'update'])->name('jobs.update');
// Route::post('/jobs', [JobsController::class, 'store'])->name('jobs.store');
require __DIR__ . '/auth.php';
