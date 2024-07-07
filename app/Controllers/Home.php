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
    public function index()
    {
        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $songs = $this->songmodel->search($keyword);
        } else {
            $songs = $this->songmodel;
        }
        $data = [
            'title' => 'MP326',
            'songs' => $songs->findAll()
        ];
        return view('home', $data);
    }
}
