<?php

namespace App\Http\Controllers\Common;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\Comment;

class BlogController extends Controller
{
    /**
    * blog wise all blog category get
    * one to many relationship
    */
    public function blogCategoryListByBlogId($blog_id=1){
        return Blog::find($blog_id)->blog_category;
    }

    /**
    * Get the blog associated with the comment through the user.
    * Has One Through Relationship
    */
    public function getBlogByComment($comm='test'){
        $comment = Comment::first();
        return $comment->blogs;
    }
}
