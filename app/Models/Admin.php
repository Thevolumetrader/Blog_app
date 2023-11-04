<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable;
use App\Traits\HasRolesAndPermissions;

use  Illuminate\Contracts\Auth\Authenticatable as  AuthenticatableContract;
class Admin extends Model implements AuthenticatableContract
{
    use HasFactory, HasRolesAndPermissions, Authenticatable;


    protected $guarded = [];
    protected $table = 'admins';


    protected static $logAttributes = ['name','email'];




    public function student()
    {
        return $this->belongsTo(User::class, 'users_id', 'id');
    }
    public function studentS()
    {
        return $this->belongsTo(User::class, 'users_id', 'id');
    }

    public function parents(){
        return $this->belongsTo(Parents::class, 'parents_id', 'id');
    }
    public function teachers(){
        return $this->belongsTo(Teachers::class, 'parents_id', 'id');
    }
    public function years(){
        return $this->belongsTo(StudentYear::class, 'student_years_id', 'id');
    }
    public function classes(){
        return $this->belongsTo(StudentClass::class, 'student_classes_id', 'id');
    }
}
