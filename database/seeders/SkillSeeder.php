<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (DB::table("skills")->count() == 0) {
            DB::table('skills')->insert([
                [
                    'name' => 'Animais'
                ],
                [
                    'name' => 'Arte'
                ],
                [
                    'name' => 'Esporte'
                ],
                [
                    'name' => 'Influência'
                ],
                [
                    'name' => 'Luta'
                ],
                [
                    'name' => 'Manha'
                ],
                [
                    'name' => 'Máquinas'
                ],
                [
                    'name' => 'Medicina'
                ],
                [
                    'name' => 'Mística'
                ],
                [
                    'name' => 'Percepção'
                ],
                [
                    'name' => 'Saber'
                ],
                [
                    'name' => 'Sobrevivência'
                ]
            ]);
        }
    }
}
