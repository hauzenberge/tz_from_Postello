<?php

use Illuminate\Database\Seeder;

class AdminPremisiionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items =[
        	[
        		'name' => "All permission", 
        		'slug' => "*", 
        		'http_method' => "", 
        		'http_path' => "*",
        	],
        	[
        		'name' => "Dashboard", 
        		'slug' => "dashboard", 
        		'http_method' => "GET", 
        		'http_path' => "/",
        	],
        	[
        		'name' => "Login", 
        		'slug' => "auth.login", 
        		'http_method' => "", 
        		'http_path' => "/auth/login\n/auth/logout",
        	],
        	[
        		'name' => "User setting", 
        		'slug' => "auth.setting", 
        		'http_method' => "GET,PUT", 
        		'http_path' => "/auth/setting",
        	],

        	[
        		'name' => "Auth management", 
        		'slug' => "auth.management", 
        		'http_method' => "", 
        		'http_path' => "/auth/roles\n/auth/permissions\n/auth/menu\n/auth/logs",
        	],
        ];
        foreach ($items as $item) {
        	App\LaSeed\AdminPremissions::create($item);
        }

    }
}
