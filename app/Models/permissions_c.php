<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class permissions_c extends Model
{
    use HasFactory;
    protected $table = 'permissions_cs';
    protected $fillable = ['name', 'slug'];

    public function roles()
    {
        return $this->belongsToMany(roles_c::class, 'role_has_permissions_cs', 'permissions_c_id', 'roles_c_id');
    }
    public function users(){
        return $this->belongsToMany(User::class, 'model_has_permissions_cs', 'permissions_c_id', 'user_id');
    }
}
