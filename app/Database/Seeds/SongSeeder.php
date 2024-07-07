<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class SongSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'title' => 'Test Musik',
            'singer' => 'Yoona',
            'album' => 'Test Album',
            'created_at' => Time::now(),
            'updated_at' => Time::now()
        ];

        $this->db->table('songs')->insert($data);
    }
}
