<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'role'=>'Membre simple'
        ]);
        Role::create([
            'role'=>'Animateur'
        ]);
        Role::create([
            'role'=>'Baliseur'
        ]);
        Role::create([
            'role'=>'Bureau'
        ]);
        Role::create([
            'role'=>'Trésorière'
        ]);
        Role::create([
            'role'=>'Administrateur'
        ]);       
    }
}
