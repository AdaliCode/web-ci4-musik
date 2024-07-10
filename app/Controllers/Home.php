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
        // return var_dump($this->songmodel->select('count(DISTINCT(title))')->findAll());
        // return var_dump($this->songmodel->select(['songs.*', 'GROUP_CONCAT(singers.name) as all_singers'])->join('singer_songs', 'songs.id = singer_songs.song_id', 'inner')->join('singers', 'singers.id = singer_songs.singer_id', 'inner')->groupBy('songs.title')->findAll());
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
        // $array3 = array_merge(explode(',', $data['songs'][1]['all_singers_name']), explode(',', $data['songs'][1]['all_singers_id']));
        // return var_dump($array3);
        // return var_dump($data['songs']);
        // return var_dump(explode(',', $data['songs'][1]['all_singers_name'])) . ', ' . var_dump(explode(',', $data['songs'][1]['all_singers_id']));
        return view('home', $data);
    }

    public function detailSong($id)
    {
        $detailSong = $this->songmodel->singers()->find($id);
        // $detailSong = $this->songmodel->singers()->where('songs.id', $id)->findAll();
        // return var_dump($detailSong);
        $data = [
            'title' => 'MP326 | ' . $detailSong['title'],
            'song' => $detailSong
        ];
        return view('detailSong', $data);
    }
}
