<?php

use App\Http\Controllers\Debug\DebugController;
use App\Http\Controllers\Frontend\BlogController;
use App\Http\Controllers\Frontend\CaseStudyController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\PageController;
use App\Http\Controllers\Frontend\PortfolioController;
use App\Http\Controllers\Frontend\ServiceController;
use App\Http\Controllers\Frontend\SubscribeController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Response;
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
Route::get('/', [PageController::class, 'home'])->name('home');

Route::redirect('/admin', '/admin/dashboard');

Route::get('debug', [DebugController::class, 'index']);

// frontend blog routes
Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');
Route::post('/blog/comment', [BlogController::class, 'comment'])->name('blog.comment');

// services routes
Route::get('/service/{slug}', [ServiceController::class, 'show'])->name('service.show');

// portfolio route
Route::get('/portfolio/{slug}', [PortfolioController::class, 'show'])->name('portfolio.show');

// case study route
Route::get('/case-study/{slug}', [CaseStudyController::class, 'show'])->name('case.study.show');

// pages route
Route::get('/{slug}', [PageController::class, 'show'])->name('pages.show');

// subscribe
Route::post('subscribe', [SubscribeController::class, 'subscribe'])->name('subscribe');

// contact
Route::post('contact', [ContactController::class, 'submitContact'])->name('contact');

// custom css
Route::get('custom/css', function () {
    // Generate the CSS content dynamically
    $cssContent = view('custom-css')->render();
    // Set the content type as CSS
    $response = Response::make($cssContent);
    $response->header('Content-Type', 'text/css');

    return $response;
})->name('custom.css');
