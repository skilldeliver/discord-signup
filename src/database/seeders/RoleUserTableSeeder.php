<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class RoleUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roleUser = file_get_contents(base_path() . "/resources/jsons/role_user.json");
        $data = json_decode($roleUser, true);

        foreach ($data['role_user'] as $user) {
            DB::table('role_user')->insert([
                'role_id' => $user['role_id'],
                'user_id' => $user['user_id'],
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
