<?php
use App\Http\Controllers\Dashboard\DashHomeController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [DashHomeController::class, 'index'])->name('dashboard.home');
