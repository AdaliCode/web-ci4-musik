<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class SongSeeder extends Seeder
{
    public function run()
    {
        $faker = \Faker\Factory::create('id_ID');
        for ($i = 0; $i < 100; $i++) {
            $data = [
                'title' =>  $faker->title(),
                'singer' => $faker->name(),
                'album' => $faker->company(),
                'created_at' => Time::now(),
                'updated_at' => Time::now()
            ];
            $this->db->table('songs')->insert($data);
        }
    }
}
