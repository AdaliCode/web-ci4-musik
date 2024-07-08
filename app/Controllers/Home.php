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
        // $db = \Config\Database::connect();
        // $singerAndSong = $db->query("SELECT songs.id, songs.title, songs.album,songs.minutes_duration,songs.seconds_duration FROM singer_songs INNER JOIN songs ON singer_songs.song_id=songs.id");
        // foreach ($singerAndSong->getResultArray() as $row) {
        //     var_dump($row);
        // }
        // return var_dump($this->songmodel->like('title', 'a')->findAll());
        // return var_dump($this->songmodel->join('singer_songs', 'songs.id = singer_songs.song_id')->join('singers', 'singers.id = singer_songs.singer_id')->findAll());
        // return var_dump($this->songmodel->select(['title', 'album', 'name AS singerName', 'description'])->join('singer_songs', 'songs.id = singer_songs.song_id')->join('singers', 'singers.id = singer_songs.singer_id')->findAll());
        // return var_dump($this->songmodel->joinSingers()->findAll());
        // return var_dump($this->songmodel->select(['title', 'album'])->findAll());
        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $songs = $this->songmodel->joinSingers()->search($keyword);
        } else {
            $songs = $this->songmodel->joinSingers();
        }
        $data = [
            'title' => 'MP326',
            'songs' => $songs->findAll()
        ];
        // return var_dump($data['songs'][0]);
        // return var_dump($data['songs'][0]['name']);
        return view('home', $data);
    }

    public function detailSong($id)
    {
        $detailSong = $this->songmodel->joinSingers()->find($id);
        // $detailSong = $this->songmodel->joinSingers()->where('songs.id', $id)->findAll();
        // return var_dump($detailSong);
        $data = [
            'title' => 'MP326 | ' . $detailSong['title'],
            'song' => $detailSong
        ];
        return view('detailSong', $data);
    }
}
