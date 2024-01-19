<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
{
    use HasFactory;

    /**
    * One to Many Relationship
    */

    /**
    * Get the blogs of a blog_category
    */
    public function blog()
    {
        return $this->hasMany(Blog::class);
    }

    /**
    * Has One of Many Relationship
    */
    public function latest_blog() {
        return $this->hasOne(Blog::class)->latestOfMany();
    }

    /**
    * Has One of Many Relationship
    */
    public function oldest_blog() {
        return $this->hasOne(Blog::class)->oldestOfMany();
    }

    /**
    * Has One of Many Relationship
    */
    public function sortable_blog() {
        return $this->hasOne(Blog::class)->ofMany('blog_category_id','min');
    }

    /**
    * Has One of Many Relationship
    */
    public function sortable_blogs() {
        return $this->hasOne(Blog::class)->ofMany('blog_category_id','min');
    }

    /**
    * Retrieve all comments for the blog category
    * Has Many Through Relationship
    */
    public function comments()
    {
        return $this->hasManyThrough(Comment::class, Blog::class,'id','blog_id');
    }
}
