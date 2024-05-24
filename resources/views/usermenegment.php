<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = [
        'username', 'password', 'email',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function delete()
    {
        // Implementēt lietotāja dzēšanu šeit
    }

    public function edit($new_email = null, $new_password = null)
    {
        if ($new_email) {
            $this->email = $new_email;
        }
        if ($new_password) {
            $this->password = bcrypt($new_password);
        }
        $this->save();
    }

    public function grantPermission($permission)
    {
        if (!$this->permissions->contains($permission)) {
            $this->permissions()->attach($permission);
        }
    }

    public function revokePermission($permission)
    {
        $this->permissions()->detach($permission);
    }

    public function permissions()
    {
        return $this->belongsToMany(Permission::class);
    }
}

