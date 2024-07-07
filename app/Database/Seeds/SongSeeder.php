<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class SongSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'title' =>  'Gift',
                'singer' => 'HA SUNG WOON',
                'album' => 'Lovely Runner, Pt. 9 (Original Soundtrack)',
                'created_at' => Time::now(),
                'updated_at' => Time::now()
            ],
            [
                'title' =>  'Dia Masa Lalumu, Aku Masa Depanmu',
                'singer' => 'Vionita',
                'album' => 'Dia Masa Lalumu, Aku Masa Depanmu',
                'created_at' => Time::now(),
                'updated_at' => Time::now()
            ],
            [
                'title' =>  'May I Love You?',
                'singer' => 'UMJI',
                'album' => 'Lovely Runner, Pt. 4 (Original Soundtrack)',
                'created_at' => Time::now(),
                'updated_at' => Time::now()
            ],
            [
                'title' =>  'Sudden Shower',
                'singer' => 'ECLIPSE',
                'album' => 'Lovely Runner, Pt. 1 (Original Soundtrack)',
                'created_at' => Time::now(),
                'updated_at' => Time::now()
            ],
            [
                'title' =>  'Shiny Star (2020)',
                'singer' => 'KyoungSeo',
                'album' => 'Shiny Star (2020)',
                'created_at' => Time::now(),
                'updated_at' => Time::now()
            ],
        ];
        $this->db->table('songs')->insertBatch($data);
        $faker = \Faker\Factory::create('id_ID');
        for ($i = 0; $i < 100 - count($data); $i++) {
            $dataFaker = [
                'title' =>  $faker->title(),
                'singer' => $faker->name(),
                'album' => $faker->company(),
                'created_at' => Time::now(),
                'updated_at' => Time::now()
            ];
            $this->db->table('songs')->insert($dataFaker);
        }
    }
}
