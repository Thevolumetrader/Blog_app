<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $guarded = [];
    protected $table = 'roles';
    public function permissions()
    {
        return $this->belongsToMany(Permission::class, 'roles_permissions', 'roles_id', 'permissions_id');
    }

    public function allRolePermissions()
    {
        return $this->belongsToMany(Permission::class, 'roles_permissions', 'roles_id', 'permissions_id');
    }
}
