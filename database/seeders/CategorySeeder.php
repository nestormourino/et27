<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => '1er año',
            'slug' => '1er-ano',
            'link_drive' => 'https://drive.google.com/drive/folders/1ofe-RfjyH1pCyt-bbbB1GnCalJBYG9_S?usp=sharing',
            'link_image' => '',
            'description' => ''
        ]);
        Category::create([
            'name' => '2do año',
            'slug' => '2do-ano',
            'link_drive' => 'https://drive.google.com/drive/folders/1hIohKvS7auAwS5ScgSBAALGtaZMdzG7L?usp=sharing',
            'link_image' => '',
            'description' => ''
        ]);
        Category::create([
            'name' => '3er año',
            'slug' => '3er-ano',
            'link_drive' => 'https://drive.google.com/drive/folders/1z7oa6LHln5T6M91pNIccq4qlDOP45cTr?usp=sharing',
            'link_image' => '',
            'description' => ''
        ]);
        Category::create([
            'name' => '4to año',
            'slug' => '4to-ano',
            'link_drive' => 'https://drive.google.com/drive/folders/1Fxv1fo6lK11dyB7rsd2ms98KiBKrqVvG?usp=sharing',
            'link_image' => '',
            'description' => ''
        ]);
        Category::create([
            'name' => '5to año',
            'slug' => '5to-ano',
            'link_drive' => 'https://drive.google.com/drive/folders/1FcgRYfNSq4FIHwmysPgVCpzhRcStxzap?usp=sharing',
            'link_image' => '',
            'description' => ''
        ]);
        Category::create([
            'name' => '6to año',
            'slug' => '6to-ano',
            'link_drive' => 'https://drive.google.com/drive/folders/1fd41UaKHp1T-oNDYu7jOFoaMT6TPNgXj?usp=sharing',
            'link_image' => '',
            'description' => ''
        ]);
        Category::create([
            'name' => 'Noticias de la 27',
            'slug' => 'noticias-de-la-27',
            'link_drive' => '#',
            'link_image' => '',
            'description' => ''
        ]);
    }
}
