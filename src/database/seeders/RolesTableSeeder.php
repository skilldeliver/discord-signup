<?php

namespace Database\Seeders;

use DB;
use App\Models\Role;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = file_get_contents(base_path() . "/resources/jsons/roles.json");
        $data = json_decode($roles, true);

        foreach ($data['roles'] as $key => $role) {
            DB::table('roles')->insert([
                'discord_role_id' => $role['discord_role_id'],
                'name' => $role['name'],
                'color' => $role['color'],
                'has_panel_access' => ($key < 1), // the first role always has access to the admin panel
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
