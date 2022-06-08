<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
// // use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticate;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticate
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'is_admin',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
    ];

    public function posts(){
        // return $this->hasMany(Post::class);
        return $this->hasMany(Post::class,'user_id','id');
        //return $this->hasMany('App\Models\Post','user_id',''id);
    }
}
