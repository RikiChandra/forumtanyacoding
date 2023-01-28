<?php

use App\Http\Controllers\AnswersController;
use App\Http\Controllers\PertanyaanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TanyaCodingController;
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

Route::get('/', function () {
    return redirect()->route('/questions/public');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');



Route::middleware(['auth'])->group(function () {
    Route::get('/questions/ask', [PertanyaanController::class, 'create'])->name('/questions/ask');
    Route::get('/questions/user', [TanyaCodingController::class, 'dashboardUser'])->name('/questions/user');

    Route::post('/send/questions', [PertanyaanController::class, 'store'])->name('/send/questions');
    Route::post('/send/answers', [AnswersController::class, 'store'])->name('/send/answers');
    Route::get('/questions/user/detail/{id}', [TanyaCodingController::class, 'detail'])->name('/questions/user/detail/{id}')->middleware('questions');
    Route::get('/questions/user/edit/{id}', [TanyaCodingController::class, 'edit'])->name('/questions/user/edit/')->middleware('questions');
    Route::patch('/questions/update/{tanya}', [TanyaCodingController::class, 'update'])->name('questions.update');

    Route::delete('/questions/user/delete/{pertanyaan}', [PertanyaanController::class, 'destroy'])->name('/questions/user/delete/');

    Route::get('/profile/{id}', [ProfileController::class, 'edit'])->name('/profile/{id}');

    Route::patch('/profile/update/{user}', [ProfileController::class, 'update'])->name('profile.update');
});

Route::get('/questions/public', [TanyaCodingController::class, 'public'])->name('/questions/public');
Route::get('/questions/public/detail/{id}', [TanyaCodingController::class, 'show'])->name('/questions/public/detail/{id}');


Route::get('testing', function () {
    return view('Auths.register');
});

require __DIR__ . '/auth.php';
