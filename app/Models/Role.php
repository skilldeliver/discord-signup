<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $fillable = [
        'role_id',
        'name',
        'color',
    ];

    protected $hidden = [];

    protected $casts = [];

    public function getHexColorAttribute()
    {
        return '#' . dechex($this->color);
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
