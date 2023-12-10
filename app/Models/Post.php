<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;


    public function Categories(){
        return $this->belongsTo(Category::class, 'categories_id', 'id');
    }


    public function tags(){
        return $this->belongsTo(Tag::class, 'tags_id', 'id');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);

    }

    public function users() {
        return $this->belongsTo(Users::class, 'users_id');
    }
}
