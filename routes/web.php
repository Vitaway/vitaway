<?php

    use App\Http\Controllers\ForIndivitualController;
use App\Http\Controllers\HealthResourceController;
use App\Http\Controllers\HomeController;
    use Illuminate\Support\Facades\Auth;
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

    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/indivitual', [ForIndivitualController::class, 'index'])->name('indivitual')->name('indivitual');
    Route::get('/about', [HomeController::class, 'about'])->name('about');

    Route::prefix('/resource')->group(function() {
        Route::get('/home', [HealthResourceController::class, 'index'])->name('resource.index');
        Route::get('/role', [HealthResourceController::class, 'role'])->name('resource.role');
        Route::get('/types', [HealthResourceController::class, 'types'])->name('resource.types');
        Route::get('/condition', [HealthResourceController::class, 'condition'])->name('resource.condition');
    });

    Auth::routes();
