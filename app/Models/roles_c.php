<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class roles_c extends Model
{
    use HasFactory;
    protected $table = 'roles_cs';
    protected $fillable = ['name','slug'];

   public function permissions(){
        return $this->belongsToMany(permissions_c::class,'role_has_permissions_cs','roles_c_id','permissions_c_id');
    }
    public function users(){
        return $this->belongsToMany(User::class, 'model_has_roles_cs', 'roles_c_id', 'user_id');
    }
    function givePermissionTo($permission) {
        $this->permissions()->syncWithoutDetaching($permission);
    }
    function removePermissionTo($permission) {
        $this->permissions()->detach($permission);
    }
}
