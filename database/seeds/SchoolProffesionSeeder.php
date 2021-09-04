<?php

use Illuminate\Database\Seeder;

class SchoolProffesionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            ['profession_id' =>1, 'school_id' =>1 ],
            ['profession_id' =>2, 'school_id' =>1 ],
        ];

        foreach ($items as $item) {
            App\Models\SchoolProfession::create($item);
        }
    }
}
