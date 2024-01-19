<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    /**
    * One to Many Relationship
    */

    /**
    * Return the blog_category for the blog
    */
    public function blog_category()
    {
        return $this->belongsTo(BlogCategory::class);
    }

    /**
     * Get the user associated with the blog.
     */
    /**
    * Has One Through Relationship
    **/
    public function user()
    {
        return $this->hasOne(User::class);
    }
}
