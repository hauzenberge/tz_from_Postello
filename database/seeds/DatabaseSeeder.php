<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);       
        $this->call(AdminMenuSeeder::class);
        $this->call(AdminPremisiionsSeeder::class);
        $this->call(AdminRoleMenuSeeder::class);
        $this->call(AdminRolePremissionsSeeder::class);
        $this->call(AdminRoleUsersSeeder::class);
        $this->call(AdminRolesSeeder::class);

        $this->call(SkillsSeeder::class);
        $this->call(SchoolsSeeder::class);
        $this->call(ProfessionsSeeder::class);
        $this->call(SchoolProffesionSeeder::class);
        $this->call(ProfesoonSkillSeeder::class);
    }
}
