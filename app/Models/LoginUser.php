<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class LoginUser extends Authenticatable
{
    use HasFactory;
    protected $table = 'login_users';
    protected $fillable = [
        'name',
        'email',
        'password',
    ];


    public function hasPermission($permission)
    {
        return $this->permissions()->where('slug', $permission)->exists();
    }
   
        public function permissions()
    {
        return $this->belongsToMany(PermissionLoginUser::class, 'login_user_permissions', 'user_id', 'permission_id');
    }


   
}
