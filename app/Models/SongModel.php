<?php

namespace App\Models;

use CodeIgniter\Model;

class SongModel extends Model
{
    protected $table            = 'songs';
    protected $allowedFields    = ['title', 'singer', 'album'];
    protected $useTimestamps = true;
}
