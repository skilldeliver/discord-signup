<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;
use Socialite;

class DiscordController extends Controller
{
    /**
     * The redirect URL.
     *
     * @var string
     */
    protected $redirectURL = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function redirectToDiscord()
    {
        return Socialite::driver('discord')->redirect();
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function handle(Request $request)
    {
        try {
            $discordAccount = Socialite::driver('discord')->user();

            $user = $this->findOrNewUser($request, $discordAccount);

            Auth::login($user, true);

            return redirect()->route('homepage');
        } catch (Exception $e) {
            return redirect()->route('auth.discord');
        }
    }

    /**
     * Getting user by info or created if not exists
     *
     * @param $info
     * @return User
     */
    protected function findOrNewUser($request, $info)
    {
        $user = User::where('discord_user_id', $info->id)->first();

        // Avatar URL: https://cdn.discordapp.com/avatars/108595302537146368/6216cc9a13c7e1157cd1a17627523c5b.jpg

        preg_match_all('/avatars\/(.*?)\/(.*?).jpg/', $info->avatar, $userAvatar);

        $info->avatarHash = $userAvatar[2][0];

        if (!is_null($user)) {
            $user->update([
                'discord_avatar_hash' => $info->avatarHash,
                'discord_username' => $info->nickname
            ]);

            if (is_null($user->email)) {
                $user->update([
                    'email' => $info->email
                ]);
            }

            $user->touch();

            return $user;
        }

        return User::create([
            'discord_user_id' => $info->id,
            'discord_username' => $info->nickname,
            'discord_avatar_hash' => $info->avatarHash,
            'server_nickname' => $info->name,
            'email' => $info->email,
        ]);
    }

    /**
     * User logout
     *
     * @return void
     */
    public function logout()
    {
        Auth::logout();

        return redirect()->route('homepage');
    }
}
