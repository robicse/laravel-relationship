<?php

namespace App\Http\Controllers\Common;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BlogCategory;

class BlogCategoryController extends Controller
{
    /**
    * category wise first blog find
    * one to many relationship
    */
    public function findBlogByCategoryId($category_id=1){
        return BlogCategory::find($category_id)->blog()->where('id', '>', 1)->first();
    }

    /**
    * category wise latest blog find
    * has one of many relationship
    */
    public function latestBlog($category_id=3){
        return BlogCategory::find($category_id)->latest_blog()->first();
    }

    /**
    * category wise first blog find
    * has one of many relationship
    */
    public function oldestBlog($category_id=3){
        return BlogCategory::find($category_id)->oldest_blog()->first();
    }

    /**
    * category wise sortable blog find
    * has one of many relationship
    */
    public function sortableBlog($category_id=3){
        return BlogCategory::find($category_id)->sortable_blog()->first();
    }

    /**
    * category wise sortable blogs find
    * has one of many relationship
    */
    public function sortableBlogs($category_id=3){
        return BlogCategory::find($category_id)->sortable_blogs()->get();
    }

    /**
    * Retrieve all comments for the blog category
    * Has Many Through Relationship
    */
    public function allCommentsByBlogCategoryId($blog_category_id=1){

        $blog_category = BlogCategory::find($blog_category_id);
        return $blog_category->comments()->get();
    }
}
