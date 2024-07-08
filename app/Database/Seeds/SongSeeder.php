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
                'album' => 'Lovely Runner, Pt. 9 (Original Soundtrack)',
                'release' => '2024-05-21',
                'minutes_duration' => 4,
                'seconds_duration' => 49,
                'created_at' => Time::now(),
                'updated_at' => Time::now()
            ],
            [
                'title' =>  'Dia Masa Lalumu, Aku Masa Depanmu',
                'album' => 'Dia Masa Lalumu, Aku Masa Depanmu',
                'release' => '2021-03-05',
                'minutes_duration' => 4,
                'seconds_duration' => 2,
                'created_at' => Time::now(),
                'updated_at' => Time::now()
            ],
            [
                'title' =>  'May I Love You?',
                'album' => 'Lovely Runner, Pt. 4 (Original Soundtrack)',
                'release' => '2024-04-23',
                'minutes_duration' => 3,
                'seconds_duration' => 18,
                'created_at' => Time::now(),
                'updated_at' => Time::now()
            ],
            [
                'title' =>  'Sudden Shower',
                'album' => 'Lovely Runner, Pt. 1 (Original Soundtrack)',
                'release' => '2024-04-8',
                'minutes_duration' => 3,
                'seconds_duration' => 53,
                'created_at' => Time::now(),
                'updated_at' => Time::now()
            ],
            [
                'title' =>  'Shiny Star (2020)',
                'album' => 'Shiny Star (2020)',
                'release' => '2020-11-14',
                'minutes_duration' => 3,
                'seconds_duration' => 37,
                'created_at' => Time::now(),
                'updated_at' => Time::now()
            ],
            [
                'title' =>  'Niscaya',
                'album' => 'Niscaya',
                'release' => '2021-08-25',
                'minutes_duration' => 4,
                'seconds_duration' => 58,
                'created_at' => Time::now(),
                'updated_at' => Time::now()
            ],
        ];
        $this->db->table('songs')->insertBatch($data);
        // $faker = \Faker\Factory::create('id_ID');
        // for ($i = 0; $i < 100 - count($data); $i++) {
        //     $dataFaker = [
        //         'title' =>  $faker->title(),
        //         'album' => $faker->company(),
        //         'release' => $faker->date(),
        //         'minutes_duration' => $faker->numberBetween(2, 6),
        //         'seconds_duration' => $faker->numberBetween(0, 59),
        //         'created_at' => Time::now(),
        //         'updated_at' => Time::now()
        //     ];
        //     $this->db->table('songs')->insert($dataFaker);
        // }
    }
}
