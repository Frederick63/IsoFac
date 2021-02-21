<?php

use App\Http\Controllers\Admin\FacturaController;
use App\Http\Controllers\Admin\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;

use Illuminate\Support\Facades\Mail;
use App\Mail\RegistroMailable;

Route::get('', [HomeController::class, 'index'])->name('admin.home');

Route::resource('users', UserController::class)->only(['index','edit','update','destroy'])->names('admin.users');

Route::get('facturas', [FacturaController::class, 'index'])->middleware('can:admin.facturas.index')->name('admin.facturas.index');

Route::post('facturas', [FacturaController::class, 'show'])->middleware('can:admin.facturas.show')->name('admin.facturas.show');
