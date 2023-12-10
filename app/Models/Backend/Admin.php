<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\HasRolesAndPermissions;
use  Illuminate\Contracts\Auth\Authenticatable as  AuthenticatableContract;
class Admin extends Model implements AuthenticatableContract
{
    use HasFactory, HasRolesAndPermissions, Authenticatable;
}
