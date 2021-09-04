<?php

use Illuminate\Database\Seeder;

class AdminMenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $items = [
            ['parent_id' => 0, 'order' => 1,    'title' => "Dashboard",             'icon'  => "fa-dashboard", 'uri' => "/"],
            ['parent_id' => 0, 'order' => 7,    'title' => "Admin",                 'icon'  => "fa-tasks",    'uri' => ""],
            ['parent_id' => 2, 'order' => 6,    'title' => "Users",                 'icon'  => "fa-users",    'uri' => "auth/users"],
            ['parent_id' => 2, 'order' => 7,    'title' => "Roles",                 'icon'  => "fa-user",     'uri' => "auth/roles"],
            ['parent_id' => 2, 'order' => 8,    'title' => "Permission",            'icon'  => "fa-ban",      'uri' => "auth/permissions"],
            ['parent_id' => 2, 'order' => 9,    'title' => "Menu",                  'icon'  => "fa-bars",     'uri' => "auth/menu"],
            ['parent_id' => 2, 'order' => 10,   'title' => "Operation log",         'icon'  => "fa-history",  'uri' => "auth/logs"],
            
            ['parent_id' => 0,'order' => 2,'title' => "Schools",'icon'  => "fa-stethoscope",   'uri' => "schools"],
            ['parent_id' => 0,'order' => 5,'title' => "Professions",'icon'  => "fa-product-hunt",  'uri' =>  "professions"],
            ['parent_id' => 0,'order' => 4,'title' => "Skills",'icon'  => "fa-stethoscope",'icon'  => "fa-asterisk",  'uri' => "skills"],
            ['parent_id' => 0,'order' => 6,'title' => "Profession Skills",'icon'  => "fa-asterisk",  'uri' => "profession-skills"],
            ['parent_id' => 0,'order' => 3,'title' => "School Professions",'icon'  => "fa-bars",  'uri' => "school-professions"],
           
            
        ];

        foreach ($items as $item) {
            App\LaSeed\AdminMenu::create($item);
        }
    }
}
