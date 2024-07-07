<?php

namespace App\Controllers;

use App\Models\SongModel;

class Home extends BaseController
{
    protected $songmodel;
    public function __construct()
    {
        $this->songmodel = new SongModel();
    }
    public function index(): string
    {
        $data = [
            'title' => 'MP326',
            'songs' => $this->songmodel->findAll()
        ];
        return view('home', $data);
    }
}
