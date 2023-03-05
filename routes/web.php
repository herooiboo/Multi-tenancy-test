<?php

use App\Http\Controllers\createTenantController;
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

Route::get('/', [createTenantController::class, 'index'])->name('tenant.create');
Route::post('/', [createTenantController::class, 'CreateTenant'])->name('tenant.create');
Route::get('list', [createTenantController::class, 'listTenants'])->name('tenant.list');
