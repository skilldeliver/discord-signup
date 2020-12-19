<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'discord_id',
        'discord_username',
        'discord_avatar',
        'server_nickname',
        'email',
        'roles',
    ];

    protected $searchableFields = ['*'];

    protected $hidden = ['remember_token'];

    protected $casts = [];

    public function getAvatarUrlAttribute()
    {
        return 'https://cdn.discordapp.com/avatars/' . $this->discord_id . '/' . $this->discord_avatar . '.jpg';
    }
}
