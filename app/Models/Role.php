<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    /**
    * Get the roles associated with the user.
    * Get the users associated with the role.
    */
    /**
    * Many To Many Relationship
    **/
    public function users()
    {
        return $this->belongsToMany(User::class);
        // return $this->belongsToMany(User::class)->withPivot("status", "created_at");
    }
}
