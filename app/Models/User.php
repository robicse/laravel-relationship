<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;
    // protected $guard_name = 'web';
    protected $fillable = [
        'name',
        'phone',
        'user_type',
        'otp',
        'ip_address',
        'email',
        'photo',
        'password',
        'username',
        'language'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',

    ];

    /**
    * One to One Relationship
    **/
    public function profile(){
        return $this->hasOne(Profile::class);
    }

    /**
    * Get the blog associated with the user.
    */
    /**
    * Has One Through Relationship
    **/
    public function blog()
    {
        return $this->belongsTo(Blog::class);
    }

    /**
    * Get the roles associated with the user.
    * Get the users associated with the role.
    */
    /**
    * Many To Many Relationship
    **/
    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

}
