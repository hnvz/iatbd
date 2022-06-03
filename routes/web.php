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

Route::middleware(['auth', 'admin'])->group(function(){
    Route::get('/applications/all', [\App\Http\Controllers\ApplicationController::class, 'showall']);
    Route::post('/applications/delete/{id}', [\App\Http\Controllers\ApplicationController::class, 'delete']);
    Route::post('/users/block/{id}', [\App\Http\Controllers\UserController::class, 'blockuser']);
    Route::post('/users/unblock/{id}', [\App\Http\Controllers\UserController::class, 'unblockuser']);
    Route::get('/users/blocked', [\App\Http\Controllers\UserController::class, 'blockedusers']);
});

Route::middleware(['auth'])->group(function(){
    Route::get('/pets', [\App\Http\Controllers\PetController::class, 'index']);

    Route::get('/pets/create', [\App\Http\Controllers\PetController::class, 'create']);
    Route::post('/pets/create', [\App\Http\Controllers\PetController::class, 'store']);
    Route::get('/pets/{id}', [\App\Http\Controllers\PetController::class, 'show']);

    Route::get('/users/{id}', [\App\Http\Controllers\UserController::class, 'show']);

    Route::get('/pets/application/{id}', [\App\Http\Controllers\ApplicationController::class, 'apply']);
    Route::post('/application', [\App\Http\Controllers\ApplicationController::class, 'store']);
    Route::get('/applications/received', [\App\Http\Controllers\ApplicationController::class, 'receivedindex']);
    Route::get('/applications/sent', [\App\Http\Controllers\ApplicationController::class, 'sentapp']);
    Route::get('/applications/received/{id}', [\App\Http\Controllers\ApplicationController::class, 'receivedshow']);
    Route::post('/applications/accept/{id}', [\App\Http\Controllers\ApplicationController::class, 'accept']);
    Route::post('/applications/reject/{id}', [\App\Http\Controllers\ApplicationController::class, 'reject']);
    Route::get('/reviews/create/{id}', [\App\Http\Controllers\ReviewController::class, 'create']);
    Route::post('/reviews/create', [\App\Http\Controllers\ReviewController::class, 'store']);

    
});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
