<?php

use Illuminate\Database\Seeder;

class AdminRoleUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\LaSeed\AdminRoleUsers::create(['role_id' => 1, 'user_id' => 1]);
    }
}
