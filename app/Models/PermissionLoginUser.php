<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PermissionLoginUser extends Model
{
    use HasFactory;
    protected $table = 'permission_login_users';
    protected $fillable = ['name', 'slug'];

   
  
        public function loginUsers()
    {
        return $this->belongsToMany(LoginUser::class, 'login_user_permissions', 'permission_id', 'user_id');
    }



}
