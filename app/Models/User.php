<?php

namespace App\Models;

use App\Casts\UserPasswordCast;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $table = 'user';
    protected $primaryKey = 'id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * The attributes that are added to collection.
     *
     * @var array
     */
    protected $appends = ['photopath'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that casted with different format.
     *
     * @var array
     */
    protected $casts = [
        'password' => UserPasswordCast::class,
    ];

    public function role()
    {
        return $this->belongsTo(Role::class, 'role_id', 'id');
    }

    public function isRole($role)
    {
        $role = Role::where('name', $role)->first();

        if ($role) {
            return auth()->user()->role_id == $role->id;
        } 
        else {
            return false;
        }
    }

    public function getPhotoPathAttribute()
    {
        return asset('storage/user/photo/'.$this->photo);
    }

    public function scopeApproved($query)
    {
        return $query->where('is_approved', true);
    }
}
