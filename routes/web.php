<?php
use App\Http\Controllers\Dashboard\DashHomeController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [DashHomeController::class, 'index'])->name('dashboard.home');
Route::get('/recieved', [DashHomeController::class, 'send'])->name('recieved');
Route::get('/Purchase', function () {
    return view('dashboard.layouts.Purchase');
});
Route::get('/Sender', function () {
    return view('dashboard.layouts.Sender');
});
Route::get('/Contract', function () {
    return view('dashboard.layouts.Contractsummary');
});
Route::get('/transection', function () {
    return view('dashboard.transection_contract.transection');
});