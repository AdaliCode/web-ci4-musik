<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class SingerSongSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'singer_id' =>  1,
                'song_id' =>  1,
                'created_at' => Time::now(),
                'updated_at' => Time::now()
            ],
            [
                'singer_id' =>  2,
                'song_id' =>  4,
                'created_at' => Time::now(),
                'updated_at' => Time::now()
            ],
            [
                'singer_id' =>  3,
                'song_id' =>  5,
                'created_at' => Time::now(),
                'updated_at' => Time::now()
            ],
        ];
        $this->db->table('singer_songs')->insertBatch($data);
    }
}
