<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UnivController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\DetailsController;
use App\Http\Controllers\ProfileController;

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
    return view('welcome');
});
Route::get('/support', [UnivController::class, 'support'])->name('support');

Route::get('/dashboard', function () {
    return view('user.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/account', [UnivController::class, 'account'])->name('account');
    Route::post('/account', [UnivController::class, 'postAccount'])->name('account');
    Route::get('/level', [UnivController::class, 'level'])->name('level');
    Route::get('/event', [UnivController::class, 'event'])->name('event');
    Route::get('/task', [UnivController::class, 'task'])->name('task');
    //Route::resource('/task', [TaskController::class]);
    Route::get('/wallet', [UnivController::class, 'wallet'])->name('wallet');
    Route::post('/wallet', [UnivController::class, 'postWallet'])->name('wallet');
    Route::get('/support', [UnivController::class, 'support'])->name('support');
    Route::get('/top-up', [UnivController::class, 'topup'])->name('topup');
    Route::get('/top-up-submit', [UnivController::class, 'topupsubmit'])->name('topupsubmit');
    Route::post('/deposit', [UnivController::class, 'deposit'])->name('deposit');
    Route::post('/withdraw', [UnivController::class, 'withdraw'])->name('withdraw');
    //Route::get('/users', [UnivController::class, 'getUsers'])->name('getUsers');
    Route::get('/withdrawal_approval', [UnivController::class, 'withdrawal_approval'])->name('withdrawal_approval');
    Route::put('/withdrawal_approval/{id}', [UnivController::class, 'approve_withdraw'])->name('approve_withdraw');

    Route::resource('/order', OrderController::class);

    Route::post('/updateorinsert', [OrderController::class, 'updateorinsert'])->name('updateorinsert');

    Route::resource('/user', UserController::class);
    Route::get('/getSecurity', [UserController::class, 'getSecurity'])->name('getSecurity');
    Route::post('/postSecurity', [UserController::class, 'postSecurity'])->name('postSecurity');

    Route::get('/Account-details', [DetailsController::class, 'getWithdrawal'])->name('getWithdrawal');

    
});

require __DIR__.'/auth.php';
