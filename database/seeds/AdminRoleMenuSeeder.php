<?php

use Illuminate\Database\Seeder;

class AdminRoleMenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\LaSeed\AdminRoleMenu::create(['role_id' => 1, 'menu_id' => 2]);
    }
}
