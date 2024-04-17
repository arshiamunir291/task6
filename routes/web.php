<?php
use App\Http\Controllers\Dashboard\DashHomeController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [DashHomeController::class, 'index'])->name('dashboard.home');
Route::get('/sender_form', [DashHomeController::class, 'send'])->name('sender_form');
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
Route::get('/Earning', function () {
    return view('dashboard.transection_contract.Earning');
});
Route::get('/Transparent', function () {
    return view('dashboard.transection_contract.Transparent');
});
Route::get('/Recievedcontract', function () {
    return view('dashboard.transection_contract.Recievedcontract');
});
Route::get('/Cancelled', function () {
    return view('dashboard.transection_contract.Cancelled');
});
Route::get('/Profile', function () {
    return view('dashboard.transection_contract.Profile');
});
Route::get('/Payment', function () {
    return view('dashboard.transection_contract.payment');
});
Route::get('/Paymentdetail', function () {
    return view('dashboard.transection_contract.Paymentdetail');
});