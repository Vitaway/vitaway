<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
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

    Route::get('/', fn () => view('pages.index'))->name('home');
    Route::get('/indivitual', fn () => view('pages.indivitual'))->name('indivitual');
    Route::get('/about', fn () => view('pages.about'))->name('about');
    Route::get('/faqs', fn () => view('pages.faqs'))->name('faqs');
    Route::get('/who-we-serve', fn () => view('pages.who-we-serve'))->name('who-we-serve');

    Route::get('/blogs', [BlogController::class, 'homepage'])->name('blogs');
    Route::get('/blogs/{blog}', [BlogController::class, 'show'])->name('single.blog');
    Route::get('/contact-us', fn () => view('pages.contact-us'))->name('contact');
    Route::get('/faqs', fn () => view('Pages.FAQs'))->name('faqs.home');

    /**
     * --------------------------------------
     * OAuth pages Web route
     * --------------------------------------
     */
    Route::get('/oauth/login', fn() => view('auth.login'))->name('get.login');
    Route::get('/oauth/{provider}', [LoginController::class, 'redirectToProvider'])->name('init.oauth');

    /**
     * --------------------------------------
     * OAuth Authentication Web route
     * --------------------------------------
     */
    Route::get('/complete/github/oauth', [LoginController::class, 'handleGithubCallback'])->name('complete.github.oauth');
    Route::get('/complete/google/oauth', [LoginController::class, 'handleGoogleCallback'])->name('complete.google.oauth');

    /**
     * --------------------------------------
     * Authenticated user Web route
     * --------------------------------------
     */
    Route::group(['middleware' => ['auth']], function() {
        Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
        Route::post('/blogs', [BlogController::class, 'store'])->name('post.blogs');
        Route::get('/profile', [AdminController::class, 'profile'])->name('profile');
        Route::post('/profile', [ProfileController::class, 'store'])->name('post.profile');
        Route::get('/logout', [LoginController::class, 'logout'])->name('adminLogout');
    });

    Route::prefix('/condition')->group(function() {
        Route::get('/diabetes', [ConditionController::class, 'diabetes'])->name('condition.diabetes');
        Route::get('/pre-diabetes', [ConditionController::class, 'preDiabetes'])->name('condition.pre-diabetes');
        Route::get('/hypertension', [ConditionController::class, 'hypertension'])->name('condition.hypertension');
        Route::get('/mental-health', [ConditionController::class, 'mentalHealth'])->name('condition.mental-health');
    });
