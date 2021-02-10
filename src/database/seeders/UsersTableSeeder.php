<?php

namespace Database\Seeders;

use DB;
use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = file_get_contents(base_path() . "/resources/jsons/users.json");
        $data = json_decode($users, true);

        foreach ($data['users'] as $user) {
            DB::table('users')->insert([
                'discord_user_id' => $user['discord_user_id'],
                'discord_username' => $user['discord_username'],
                'server_nickname' => $user['server_nickname'],
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
