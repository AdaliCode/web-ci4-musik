<?php

namespace App\Controllers;

use App\Models\SingerModel;
use App\Models\SongModel;

class Home extends BaseController
{
    protected $songmodel, $singermodel;
    public function __construct()
    {
        $this->songmodel = new SongModel();
        $this->singermodel = new SingerModel();
    }
    public function index()
    {
        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $songs = $this->songmodel->singers()->search($keyword);
        } else {
            $songs = $this->songmodel->singers();
        }
        $data = [
            'title' => 'MP326',
            'songs' => $songs->findAll()
        ];
        return view('home', $data);
    }

    public function detailSong($id)
    {
        $detailSong = $this->songmodel->singers()->find($id);
        $data = [
            'title' => 'MP326 | ' . $detailSong['title'],
            'song' => $detailSong
        ];
        return view('detailSong', $data);
    }

    public function detailSinger($id)
    {
        $detailSinger = $this->singermodel->songs()->find($id);
        // return var_dump($detailSinger);
        $data = [
            'title' => 'MP326 | detailSinger',
            'singer' => $detailSinger
        ];
        return view('detailSinger', $data);
    }
}
