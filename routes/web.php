<?php

use App\Models\Category;

use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\ForgotController;
use App\Models\Type;

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

Route::get('/', function () {
    return view('home', [
        "title" => "Home",
        'active' => 'home'
    ]);
});

Route::get('/posts', [PostController::class, 'index']);
// Route::get('/posts/{post:slug}', [PostController::class, 'ShowDetailLaporan']);
Route::get('/posts/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function () {
    return view('categories', [
        'title' => 'Jobdesk',
        'active' => 'categories',
        'categories' => Category::all()
    ]);
});
Route::get('/dashboard/category', function () {
    return view('categories', [
        'title' => 'Jobdesk',
        'active' => 'categories',
        'categories' => Category::all()
    ]);
});
Route::get('/types', function () {
    return view('types', [
        'title' => 'Types',
        'active' => 'types',
        'types' => Type::all()
    ]);
});
Route::get('/dashboard/type', function () {
    return view('types', [
        'title' => 'Types',
        'active' => 'types',
        'types' => Type::all()
    ]);
});

// Login
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

// register
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

// Dashboard
Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware('auth');

Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])
    ->middleware('auth');

Route::resource('/dashboard/posts', DashboardPostController::class)
    ->middleware('auth');
Route::resource('/dashboard/post', PostController::class)
    ->middleware('auth');


Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show')->middleware('admin');

//download pdf

Route::get('cetaklaporan/{id}', [PostController::class, 'generatelaporan'])->name('generatelaporan');

// Route::get('card/{id}', [PDFController::class, 'generatecard'])->name('generatecard');
// Route::get('card', [PDFController::class, 'card'])->name('card');
// // Route::get('filepdf/{id} ', [PDFController::class, 'halpdf'])->name('halpdf');R
// Route::get('generate-pdf/{id} ', [PDFController::class, 'generatePDF'])->name('download');

// Route::get('/dashboard/categories', [DashboardPostController::class])
//     ->middleware('auth');

// Route::resource('/dashboard/categories', AdminCategoryController::class)
//     ->except('show')->middleware('admin');



// Route::get('/categories/{category:slug}', function (Category $category) {
//     return view('posts', [
//         'title' => " Post By Category : $category->name",
//         'active' => 'categories',
//         'posts' => $category->posts->load('category', 'author'),


//     ]);
// });


// Route::get('/authors/{author:username}', function (User $author) {
//     return view('posts', [
//         'title' => "Post By Author : $author->name",
//         'active' => 'posts',
//         'posts' => $author->posts->load('category', 'author'),

//     ]);
// });
