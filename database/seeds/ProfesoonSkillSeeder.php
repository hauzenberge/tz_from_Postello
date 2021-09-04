<?php

use Illuminate\Database\Seeder;

class ProfesoonSkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items =[
            ['profession_id' => 1, 'skill_id' => 1],
            ['profession_id' => 1, 'skill_id' => 2],
            ['profession_id' => 1, 'skill_id' => 3],
            ['profession_id' => 1, 'skill_id' => 4],

            ['profession_id' => 2, 'skill_id' => 1],
            ['profession_id' => 2, 'skill_id' => 2],
            ['profession_id' => 2, 'skill_id' => 3],
            ['profession_id' => 2, 'skill_id' => 4],
        ];

        foreach ($items as $item) {
            App\Models\ProfessionSkill::create($item);
        }
    }
}
