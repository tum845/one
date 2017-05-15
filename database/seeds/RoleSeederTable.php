<?php

use Illuminate\Database\Seeder;

class RoleSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'name' => 'root',
            'display_name' => 'Administrator',
            'description' => 'Web Administrator',
        ]);

        DB::table('role_user')->insert([
            'user_id' => 1,
            'role_id' => 1
        ]);
    }

}
