<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    
    protected $table = 'comments';

    protected $fillable = [
        'content',
        'user_id',
        'post_id',
    ];

    public function user(){
        return $this->beLongsTo(User::class,'user_id','id');
    }

    public function post(){
        return $this->beLongsTo(Post::class);
    }
}
