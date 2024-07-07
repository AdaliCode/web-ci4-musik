<?php

namespace App\Models;

use CodeIgniter\Model;

class SongModel extends Model
{
    protected $table            = 'songs';
    protected $allowedFields    = ['title', 'singer', 'album'];
    protected $useTimestamps = true;

    public function search($keyword)
    {
        return $this->table('songs')->like('title', $keyword)->orLike('singer', $keyword)->orLike('album', $keyword);
    }
}
