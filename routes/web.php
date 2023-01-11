<?php

use App\Http\Controllers\AnswersController;
use App\Http\Controllers\PertanyaanController;
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
});

Route::get('/questions/public', [TanyaCodingController::class, 'public'])->name('/questions/public');
Route::get('/questions/public/detail/{id}', [TanyaCodingController::class, 'show'])->name('/questions/public/detail');
require __DIR__ . '/auth.php';
