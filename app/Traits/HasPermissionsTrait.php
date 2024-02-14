<?php
namespace App\Traits;

use App\Models\permissions_c;
use App\Models\roles_c;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

trait HasPermissionsTrait {

    
    public function roles(): BelongsToMany
    {
        return $this->belongsToMany(roles_c::class, 'model_has_roles_cs', 'user_id', 'roles_c_id');
    }
    public function permissions(): BelongsToMany
    {
        return $this->belongsToMany(permissions_c::class, 'model_has_permissions_cs', 'user_id', 'permissions_c_id');
    }

   

    public function assignRole($role) {
        $this->roles()->sync($role);
    }
    public function removeRole($role) {
        $this->roles()->detach($role);
    }

    public function assignPermission($permission) {
        $this->permissions()->sync($permission);
    }
    public function removePermission($permission) {
        $this->permissions()->detach($permission);
    }

    public function hasPermission($permission) {
        $rolesForThisPermisiions = $permission->roles;
        foreach ($rolesForThisPermisiions as $role) {
            if ($this->hasRole($role)) {
                return true;
            }
        }
        return (bool) $this->permissions()->where('slug', $permission->slug)->count();
    }

   

    public function hasRole($role) {
        return (bool) $this->roles()->where('slug', $role->slug)->count();
    }

  
 
}