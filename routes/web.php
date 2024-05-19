<?php

use App\Http\Controllers\SendLogInCodeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\UserController;
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



// Route::get('/home',function(){

// return view('sections.home');

// });

// Route::get('/page/{page}',[MenuController::class,'show']);


Route::get('/getcode',function(){
    return view('auth.confirmcode');
    })->name('getcode');


 Route::post('confirmcodee',[SendLogInCodeController::class,'otp_code_confirm'])->name('confirm_otp_code');

Route::post('/confirmcode',[SendLogInCodeController::class,'index'])->name('confirm.code');

Route::post('/recode',[SendLogInCodeController::class,'recode'])->name('recode');


// Route::post('/changepass', function(){
//     return view('auth.changepass');
// })->name('changepass');
Route::get('/changepass',[SendLogInCodeController::class,'changepass']);

Route::post('/changepass',[SendLogInCodeController::class,'changepass'])->name('changepass');

Route::get('/sms', function () {
    return view('auth.loginsms');
});


Route::get('/',[MenuController::class,'welcome']);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/admins',[UserController::class,'index'])->name('adminshow');

    Route::get('/logo',[MenuController::class,'index']);
    Route::post('/logo',[MenuController::class,'store'])->name('logo.store');

    Route::get('/title', function () {
        return view('panel.title');
    });
    Route::post('/title',[MenuController::class,'titlestore'])->name('title.store');


    Route::get('/color', function () {
        return view('panel.color');
    });
    Route::post('/color',[MenuController::class,'colorstore'])->name('color.store');

});

require __DIR__.'/auth.php';
