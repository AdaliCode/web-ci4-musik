<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class SingerSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'name' =>  'HA SUNG WOON',
                'description' => 'Ha Sung-woon (Hangul: 하성운, lahir 22 Maret 1994) adalah penyanyi asal Korea Selatan',
            ],
            ['name' =>  'ECLIPSE'],
            ['name' =>  'KyoungSeo'],
            ['name' =>  'Bilal Indrajaya'],
            ['name' =>  'MINNIE'],
            ['name' =>  'JONG HO'],
            ['name' =>  'Lyodra'],
        ];
        for ($i = 1; $i < count($data); $i++) {
            $data[$i]['description'] = null;
        }
        $this->db->table('singers')->insertBatch($data);
    }
}
