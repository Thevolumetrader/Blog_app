<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\TagController;
use App\Http\Controllers\Backend\CommentController;

use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\Frontend\FrontendController;
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

Route::get('/', [FrontendController::class,'homepage'])->name('homepage');



Route::get('/detail/{slug}/{id}',[FrontendController::class,'detail']);


Route::get('/singlepost/{post:slug}', [PostController::class, 'singleBlog'])->name('singleBlog');
Route::get('/tagpost/{tag:slug}', [FrontendController::class, 'tagsWisePost'])->name('tagsWisePost');
Route::get('/login', [UserController::class, 'getLogin'])->name('user.getlogin');
Route::get('/register', [UserController::class, 'getRegister'])->name('user.getRegister');
Route::post('/post/login', [UserController::class, 'postLogin'])->name('user.postlogin');
Route::post('/post/register', [UserController::class, 'postRegister'])->name('user.postRegister');
Route::get('/categorypost/{category:slug}', [FrontendController::class, 'categoryWisePost'])->name('categoryWisePost');
Route::post('/comments',[CommentController::class, 'store'])->name('comments.store');
Route::get('/comments/{postId}', [CommentController::class, 'index'])->name('comments.index');
Route::middleware(['auth:web', ])->group(function () {
    Route::get('/logout', [FrontendController::class, 'logOut'])->name('user.logout');

});
Route::post('/user/logout', [UserController::class, 'logout'])->name('logout');
    Route::post('post/comment', [CommentController::class, 'postComment'])->name('postcomment');
    Route::get('/login/$2y$10$tSMuhvXH82sWylqOPDUgcuinjkG9YmnE9unyhDkzXn5muZZouaT1y', [AdminController::class, 'getAdminLogin'])->name('admin.get.login');
    Route::post('/post/$10$tSMuhvXH82sWylqOPDUgcuinjkG9YmnE9unyhDkzXn5muZZouaT1y',  [AdminController::class, 'postAdminLogin'])->name('admin.post.login');
Route::middleware(['auth:admin', 'role:superadmin,admin'])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboardPage'])->name('admin.dashboard');
    Route::get('/tag', [TagController::class, 'index'])->name('admin.tag.index');
    Route::post('/store/tag', [TagController::class, 'store'])->name('admin.tag.store');
    Route::post('/update/tag/{id}', [TagController::class, 'update'])->name('admin.tag.update');
    Route::delete('/delete/tag/{id}', [TagController::class, 'destroy'])->name('admin.tag.delete');
    Route::get('/category', [CategoryController::class, 'index'])->name('admin.category.index');

    Route::post('/store/category', [CategoryController::class, 'store'])->name('admin.category.store');
    Route::post('/update/category/{id}', [CategoryController::class, 'update'])->name('admin.category.update');
    Route::delete('/delete/category/{id}', [CategoryController::class, 'destroy'])->name('admin.category.delete');
    Route::get('/post', [PostController::class, 'index'])->name('admin.post.index');
    Route::post('/store/post', [PostController::class, 'store'])->name('admin.post.store');
    Route::post('/update/post/{id}', [PostController::class, 'update'])->name('admin.post.update');
    Route::get('/contact-us', [FrontendController::class, 'contactUs'])->name('admin.contactUs');
    Route::post('/store/contact-us', [FrontendController::class, 'storeContactUs'])->name('admin.storeContactUs');
    Route::post('/update/contact-us/{id}', [FrontendController::class, 'updateContactUs'])->name('admin.updateContactUs');
    Route::get('/about-us', [FrontendController::class, 'aboutUs'])->name('admin.aboutUs');
    Route::post('/store/about-us', [FrontendController::class, 'storeAboutUs'])->name('admin.storeAboutUs');
    Route::post('/update/about-us/{id}', [FrontendController::class, 'updateAboutUs'])->name('admin.updateAboutUs');
    Route::resource('/role',RolesController::class)->only(['index','create','store','show','update','destroy','edit',  ]);
    Route::resource('/adminuser',AdminController::class)->only(['index','create','store','show','update','destroy','edit',  ]);
    Route::get('/logout', [AdminController::class, 'logOut'])->name('admin.logout');
});
