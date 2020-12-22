<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $primaryKey = 'discord_role_id';

    public $incrementing = false;

    protected $fillable = [
        'discord_role_id',
        'name',
        'color',
        'has_panel_access',
    ];

    public function getHexColorAttribute()
    {
        return '#' . dechex($this->color);
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
