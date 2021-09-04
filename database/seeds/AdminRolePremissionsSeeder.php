<?php

use Illuminate\Database\Seeder;

class AdminRolePremissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\LaSeed\AdminRolePremissions::create(['role_id' => 1, 'permission_id' =>1 ]);
    }
}
