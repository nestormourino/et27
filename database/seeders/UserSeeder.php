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
            'name' => 'Testing',
            'email' => 'testing@test.com',
            'password' => bcrypt('123456')
        ]);
        
        User::factory(5)->create();
    }
}
