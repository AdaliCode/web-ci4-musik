<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class TestSeeder extends Seeder
{
    public function run()
    {
        $this->call('SingerSeeder');
        $this->call('SongSeeder');
        $this->call('SingerSongSeeder');
    }
}
