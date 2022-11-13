<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Néstor Mouriño',
            'email' => 'nestor.mourino@bue.edu.ar',
            'password' => bcrypt('12541254')
        ]);
        User::create([
            'name' => 'Paula Mensa',
            'email' => 'paula.mensa@bue.edu.ar',
            'password' => bcrypt('123456')
        ]);
        
    }
}
