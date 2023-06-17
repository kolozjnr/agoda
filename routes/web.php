<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UnivController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\DetailsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserLockController;

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

    Route::get('/account', [UnivController::class, 'account'])->name('account.index');
    Route::post('/account', [UnivController::class, 'postAccount'])->name('account');
    Route::get('/level', [UnivController::class, 'level'])->name('level');
    Route::get('/event', [UnivController::class, 'event'])->name('event');
    Route::get('/task', [UnivController::class, 'task'])->name('task');
    //Route::resource('/task', [TaskController::class]);
    Route::get('/wallet', [UnivController::class, 'wallet'])->name('wallet.index');
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
    //Route::get('/lock', [UserController::class, 'lock'])->name('lock.index');
    //Route::get('/lock', [UserController::class, 'index'])->name('getlock');
    Route::put('/lock/{id}', [UserController::class, 'getBanned'])->name('ban.user');
    Route::put('/unbanuser/{id}', [UserController::class, 'release'])->name('user.release');
    Route::put('/recharge/{id}', [UserController::class, 'recharge'])->name('user.rechargee');
    Route::put('/reset/{id}', [UserController::class, 'reset'])->name('user.reset');
    Route::put('/levelreset/{id}', [UserController::class, 'levelReset'])->name('user.levelReset');

    Route::get('/getSecurity', [UserController::class, 'getSecurity'])->name('getSecurity');
    Route::post('/postSecurity{id}', [UserController::class, 'postSecurity'])->name('postSecurity');

    Route::get('/Account-details', [DetailsController::class, 'getWithdrawal'])->name('getWithdrawal');

    
});

require __DIR__.'/auth.php';
