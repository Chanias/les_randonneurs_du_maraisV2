<?php

namespace Database\Seeders;

use App\Models\Animateur;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class AnimateurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Animateur::create([
            'user_id'=>2,
            'randonnee_id'=>6,
        ]);
    }
}
