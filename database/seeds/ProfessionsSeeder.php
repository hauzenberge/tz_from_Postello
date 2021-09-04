<?php

use Illuminate\Database\Seeder;

class ProfessionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            ['name' => 'BackEnd Developer'],
            ['name' => 'FrontвEnd Developer'],
        ];

        foreach ($items as $item) {
            App\Models\Professions::create($item);
        }
    }
}
