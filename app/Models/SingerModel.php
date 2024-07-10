<?php

namespace App\Models;

use CodeIgniter\Model;

class SingerModel extends Model
{
    protected $table            = 'singers';
    protected $allowedFields    = ['name', 'description'];
    protected $useTimestamps = true;

    public function songs()
    {
        return $this->table('singers')->select(['singers.*', 'GROUP_CONCAT(songs.title, songs.id) as all_songs'])->join('singer_songs', 'singers.id = singer_songs.singer_id', 'inner')->join('songs', 'songs.id = singer_songs.song_id', 'inner')->groupBy('singers.name');
    }
}
