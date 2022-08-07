<?php

use App\Http\Controllers\Dashboard\AuthorizationController;
use App\Http\Controllers\Dashboard\HomeController;
use App\Http\Controllers\Dashboard\UsersController;
use App\Http\Middleware\AuthenticateForDashboard;
use App\Http\Middleware\Roles\HaveAccessToUsers;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'auth.session', AuthenticateForDashboard::class])->group(function () {
    Route::get('/', [HomeController::class, 'showHomePage'])->name('dashboard');
    Route::get('/logout', [AuthorizationController::class, 'logout'])->name('logout');

    Route::prefix('/users')
         ->middleware([HaveAccessToUsers::class])
         ->controller(UsersController::class)
         ->group(function () {
             CRUDRoutes('users');
         });
});


Route::middleware(['guest'])->group(function () {
    Route::get('/login', [AuthorizationController::class, 'showLoginPage'])->name('login');
    Route::post('/login', [AuthorizationController::class, 'login'])->name('loginHandler');
});


function CRUDRoutes($namePrefix): void
{
    Route::get('/', 'showAll')->name($namePrefix);

    Route::get('/create', 'showForm')->name("{$namePrefix}-create");
    Route::post('/create', 'create');

    Route::get('/{id}/edit', 'showForm')->name("{$namePrefix}-edit");
    Route::post('/{id}/edit', 'update');

    Route::get('/{id}/remove', 'remove')->name("{$namePrefix}-remove");
}
