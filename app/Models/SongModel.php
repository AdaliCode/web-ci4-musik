<?php

namespace App\Models;

use CodeIgniter\Model;

class SongModel extends Model
{
    protected $table            = 'songs';
    protected $allowedFields    = ['title', 'singer', 'album'];
    protected $useTimestamps = true;

    public function joinSingers()
    {
        return $this->table('songs')->select(['songs.id', 'title', 'album', 'release', 'minutes_duration', 'seconds_duration', 'name AS singer_name', 'description'])->join('singer_songs', 'songs.id = singer_songs.song_id')->join('singers', 'singers.id = singer_songs.singer_id');
        // return $this->table('songs')->join('singer_songs', 'songs.id = singer_songs.song_id')->join('singers', 'singers.id = singer_songs.singer_id');
    }

    public function search($keyword)
    {
        return $this->table('songs')->like('title', $keyword)->orLike('singer', $keyword)->orLike('album', $keyword);
    }
}
