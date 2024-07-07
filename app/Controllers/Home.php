<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data = ['title' => 'MP326'];
        return view('home', $data);
    }
}
