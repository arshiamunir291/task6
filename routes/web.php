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
Route::get('/contractsummary', function () {
    return view('dashboard.layouts.Contractsummary');
});
Route::get('/transection', function () {
    return view('dashboard.transection_contract.transection');
});
Route::get('/earning', function () {
    return view('dashboard.transection_contract.Earning');
});
Route::get('mycontracts/activecontract', function () {
    return view('dashboard.transection_contract.Transparent');
});
Route::get('mycontracts/recievedcontract', function () {
    return view('dashboard.transection_contract.Recievedcontract');
});
Route::get('mycontracts/cancelled', function () {
    return view('dashboard.transection_contract.Cancelled');
});
Route::get('/Profile', function () {
    return view('dashboard.transection_contract.Profile');
});
Route::get('mycontracts/completedcontract', function () {
    return view('dashboard.transection_contract.Completed');
});
Route::get('/payment', function () {
    return view('dashboard.transection_contract.Payment');
});
Route::get('/securitycenter', function () {
    return view('dashboard.transection_contract.Securitycenter');
});
Route::get('/bankdetails', function () {
    return view('dashboard.transection_contract.BankDetail');
});
Route::get('/requestCancellation', function () {
    return view('dashboard.transection_contract.RequestCancellation');
});
Route::get('/transactionhistory', function () {
    return view('dashboard.transection_contract.TransactionHistory');
});
