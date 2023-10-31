<?php

use App\Http\Controllers\FriendShipController;
use App\Http\Controllers\ProfileController;
use App\Http\Livewire\Chat\CreateChat;
use App\Http\Livewire\Chat\Main;
use App\Http\Livewire\Friendship;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/friendship',[FriendShipController::class,'index'])->name('friendship');
Route::post('/sendfriendrequest',[FriendShipController::class,'sendFriendRequest'])->name('sendfriendrequest');
Route::post('/feedback-friend-request', [FriendShipController::class, 'feedbackFriendRequest'])->name('feedbackFriendRequest');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
