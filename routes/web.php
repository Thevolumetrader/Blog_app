<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\TagController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\PostController;
use App\Http\Controllers\RolesController;
use App\Models\Backend\Post;
use App\Models\Backend\Tag;
use App\Models\Backend\Category;
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

Route::get('/', function () {
    $posts= Post::all();
    $categories = Category::all();
    $tags = Tag::all();
    return view('frontend.master',compact('posts', 'categories', 'tags'));
});

Route::get('/dashboard', [AdminController::class, 'dashboardPage'])->name('admin.dashboard');
Route::get('/tag', [TagController::class, 'index'])->name('admin.tag.index');
Route::post('/store/tag', [TagController::class, 'store'])->name('admin.tag.store');
Route::post('/update/tag/{id}', [TagController::class, 'update'])->name('admin.tag.update');
Route::get('/category', [CategoryController::class, 'index'])->name('admin.category.index');
Route::get('/post', [PostController::class, 'index'])->name('admin.post.index');
Route::resource('/role',RolesController::class)->only(['index','create','store','show','update','destroy','edit',  ]);
Route::resource('/adminuser',AdminController::class)->only(['index','create','store','show','update','destroy','edit',  ]);
