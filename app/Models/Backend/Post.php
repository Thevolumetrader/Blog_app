<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    public function categories(){
        return $this->belongsTo(Category::class, 'categories_id');
    }
    public  function tags(){
        return $this->belongsToMany(Tag::class,'post_tag','posts_id','tags_id');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class, 'posts_id', 'id');

    }
}

