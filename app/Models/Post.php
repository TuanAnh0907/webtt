<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';
    
    protected $fillable = [
        'title',
        'description',
        'content',
        'image',
        'view_counts',
        'user_id',
        'new_posts',
        'hidden',
        'slug',
        'categories_id',
        'highlight_post',
    ]; 

    public function user(){
        return $this->beLongsTo(User::class,'user_id','id');
    }

    public function category(){
        return $this->beLongsTo(Category::class,'categories_id','id');
    }

    public function comments(){
        return $this->hasMany(Comment::class);
    }

    public function imageUrl(){
        return '/image/post/'.$this->image;
    }
}

