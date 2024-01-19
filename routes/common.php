<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Common\RoleController;
use App\Http\Controllers\Common\UserController;
use App\Http\Controllers\Common\SettingController;
use App\Http\Controllers\Common\BlogCategoryController;
use App\Http\Controllers\Common\BlogController;


Route::resource('roles', RoleController::class);
Route::resource('users', UserController::class);
Route::post('user-status', [UserController::class, 'updateStatus'])->name('userStatus');
## one to one relationship
Route::get('user-details', [UserController::class, 'userDetails'])->name('userDetails');
## many to many relationship - Get the roles associated with the user - Get the users associated with the role
Route::get('user-roles', [UserController::class, 'userRoles'])->name('userRoles');

##user end
Route::resource('setting', SettingController::class);
Route::resource('blog-category', BlogCategoryController::class);
## one to many relationship - hasMany
Route::get('find-blog-by-category-id', [BlogCategoryController::class, 'findBlogByCategoryId'])->name('findBlogByCategoryId');
## has one of many relationship - category wise latest blog find
Route::get('latest-blog', [BlogCategoryController::class, 'latestBlog'])->name('latestBlog');
## has one of many relationship - category wise oldest blog find
Route::get('oldest-blog', [BlogCategoryController::class, 'oldestBlog'])->name('oldestBlog');
## has one of many relationship - id wise sortable blog find
Route::get('sortable-blog', [BlogCategoryController::class, 'sortableBlog'])->name('sortableBlog');
## has one of many relationship - id wise sortable blog find
Route::get('sortable-blogs', [BlogCategoryController::class, 'sortableBlogs'])->name('sortableBlogs');
## Has Many Through Relationship - Retrieve all comments for the blog category
Route::get('all-comments-by-blog-category-id', [BlogCategoryController::class, 'allCommentsByBlogCategoryId'])->name('allCommentsByBlogCategoryId');
Route::resource('blog', BlogController::class);
## one to many relationship - belongsTo
Route::get('blog-category-list-by-blog-id', [BlogController::class, 'blogCategoryListByBlogId'])->name('blogCategoryListByBlogId');
## Has One Through Relationship - Get the blog associated with the comment through the user.
Route::get('blog-by-comment', [BlogController::class, 'getBlogByComment'])->name('getBlogByComment');



