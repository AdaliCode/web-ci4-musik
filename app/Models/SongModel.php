<?php

namespace App\Models;

use CodeIgniter\Model;

class SongModel extends Model
{
    protected $table            = 'songs';
    protected $allowedFields    = ['title', 'singer', 'album'];
    protected $useTimestamps = true;

    public function singers()
    {
        return $this->table('songs')->select(['songs.*', 'GROUP_CONCAT(singers.name, singers.id) as all_singers', 'GROUP_CONCAT(singers.id) as all_singers_id'])->join('singer_songs', 'songs.id = singer_songs.song_id', 'inner')->join('singers', 'singers.id = singer_songs.singer_id', 'inner')->groupBy('songs.title');
    }

    public function search($keyword)
    {
        return $this->table('songs')->like('title', $keyword)->orLike('singer', $keyword)->orLike('album', $keyword);
    }
}
