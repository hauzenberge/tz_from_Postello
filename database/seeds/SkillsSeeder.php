<?php

use Illuminate\Database\Seeder;

class SkillsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items =[
            ['name' => 'PHP' ],        
            ['name' => 'HTML'],      
            ['name' => 'Laravel'],    
            ['name' => 'MySQL'],       
            ['name' => 'jQuery'],
        ];

        foreach ($items as $item) {
            App\Models\Skills::create($item);
        }
    }
}