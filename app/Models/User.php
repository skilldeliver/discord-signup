<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory;

    protected $primaryKey = 'discord_user_id';

    protected $fillable = [
        'discord_user_id',
        'discord_username',
        'discord_avatar_hash',
        'server_nickname',
        'email',
    ];

    protected $hidden = ['remember_token'];

    public function getAvatarHashAttribute()
    {
        return 'https://cdn.discordapp.com/avatars/' . $this->discord_user_id . '/' . $this->discord_avatar_hash . '.jpg';
    }

    public function getIsAdminAttribute()
    {
        $result = $this->roles()->where('has_panel_access', '>', 0)->exists();

        return $result;
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class, 'role_user', 'user_id', 'role_id');
    }
}
