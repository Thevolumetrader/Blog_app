<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
class Comment extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $table = 'comments';

    public function posts(){
        return $this->BelongsTo(Comment::class, 'posts_id');
    }

    public function commentable()
    {
        return $this->morphTo();
    }
    public function users()
    {
        return $this->belongsTo(User::class, 'users_id');
    }
}
