<?php

use App\Http\Controllers\Dashboard\AuthorizationController;
use App\Http\Controllers\Dashboard\BlocksController;
use App\Http\Controllers\Dashboard\HomeController;
use App\Http\Controllers\Dashboard\UsersController;
use App\Http\Middleware\AuthenticateForDashboard;
use App\Models\Role;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'auth.session', AuthenticateForDashboard::class])->group(function () {
    Route::get('/', [HomeController::class, 'showHomePage'])->name('dashboard');
    Route::get('/logout', [AuthorizationController::class, 'logout'])->name('logout');

    Route::prefix('/users')
         ->middleware('role:'. Role::ROLE_ACCESS_TYPE_USERS)
         ->controller(UsersController::class)
         ->group(function () {
             CRUDRoutes('users');
         });

    Route::prefix('demo')
        ->middleware('role:'. Role::ROLE_ACCESS_TYPE_DEMO)
        ->controller(BlocksController::class)
        ->group(function (){
            Route::get('/', 'showDescription')->name('dashboard-demo-description');
            Route::get('/forms', 'showForms')->name('dashboard-demo-forms');
            Route::get('/containers', 'showContainers')->name('dashboard-demo-containers');
            Route::get('/tables', 'showTables')->name('dashboard-demo-tables');
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
