<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'role';
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
    protected $appends = ['approved'];

    public function user()
    {
        return $this->hasMany(User::class, 'role_id', 'id');
    }

    public function getApprovedAttribute()
    {
        return $this->where('is_approved', true);
    }

    public function scopeWhereName($query, $name)
    {
        return $query->where('name', $name);
    }
}
