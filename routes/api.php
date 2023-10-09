<?php

    use App\Http\Controllers\BlogController;
    use App\Http\Controllers\ContactController;
    use Illuminate\Support\Facades\Route;

    /*
    |--------------------------------------------------------------------------
    | API Routes
    |--------------------------------------------------------------------------
    |
    | Here is where you can register API routes for your application. These
    | routes are loaded by the RouteServiceProvider within a group which
    | is assigned the "api" middleware group. Enjoy building your API!
    |
    */
    Route::post('/contacts', [ContactController::class, 'store'])->name('post.contacts');
    Route::post('/suscribe', [ContactController::class, 'suscribe'])->name('post.suscribe');

    /**
     * -----------------------------
     * Authenticated user routes
     * ------------------------------
     */
    Route::group(['middleware' => 'auth:api'], function() {
        /**
         * -----------------------------------------------
         * Docs routes
         * ------------------------------------------------
         */
        Route::get('/blogs', [BlogController::class, 'index'])->name('get.blogs');
        Route::post('/blogs', [BlogController::class, 'store'])->name('post.blogs');
        Route::post('/blogs/{blog}', [BlogController::class, 'update'])->name('update.blog');
        Route::post('/categories', [BlogController::class, 'storeCategories'])->name('post.categories');
        Route::delete('/blogs/{blog}', [BlogController::class, 'destroy'])->name('delete.blogs');
    });
