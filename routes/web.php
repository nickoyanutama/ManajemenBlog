<?php

use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\DashboardPostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', [HomeController::class, 'index']);

Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/{post:slug}', [PostController::class, 'show']);

Route::get('categories', function () {
    return view('categories', [
        'title' => 'Post Categories',
        'categories' => Category::all()
    ]);
});


Route::middleware('guest')->group(
    fn () =>
    Route::get('/login', [LoginController::class, 'index'])->name('login'),
    Route::post('/login', [LoginController::class, 'authenticate']),
    Route::get('/register', [RegisterController::class, 'index']),
    Route::post('/register', [RegisterController::class, 'store']),
);

Route::middleware('auth')->group(
    fn () =>
    Route::get('/dashboard', fn () => view('dashboard.index', [
        'title' => 'Dashboard',
        'post' => Post::where('user_id', auth()->user()->id)->count(),

    ])),
    Route::post('/logout', [LoginController::class, 'logout']),
    Route::resource('/dashboard/posts', DashboardPostController::class),
    Route::get('/dashboard/posts/createSlug', [DashboardPostController::class, 'createSlug']),
);
Route::middleware('admin')->group(
    fn () =>
    Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show'),
    Route::get('/dashboard/categories/createSlug', [AdminCategoryController::class, 'createSlug']),
);
