<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    /**
    * Has Many Through Relationship
    **/
    public function blog()
    {
        return $this->belongsTo(Blog::class);
    }

    /**
    * Get the blog associated with the comment through the user.
    */
    /**
    * Has One Through Relationship
    **/
    public function blogs()
    {
        return $this->hasOneThrough(Blog::class, User::class, 'id','user_id');
    }
}
