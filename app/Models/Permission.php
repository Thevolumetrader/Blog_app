<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    protected $guarded = [];
    protected $table = 'permissions';
    public function roles()
    {
        return $this->belongsToMany(Role::class, 'roles_permissions', 'roles_id', 'permissions_id');
    }
}
