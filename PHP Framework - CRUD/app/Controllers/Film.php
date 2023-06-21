<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\FilmModel;


class Film extends BaseController
{
    protected $film;

    public function __construct()
    {
        $this->film = new FilmModel();
    }

    public function index()
    {
        $data['dataFilm'] = $this->film->getAllDataJoin();
        return view("film/table", $data);
    }

    public function genre()
    {
        $data['dataFilm'] = $this->film->getAllDataJoin();
        return view("film/genre", $data);
    }

    public function all()
    {
        $data['data_film'] = $this->film->getAllDataJoin();
        return view("film/index", $data);
    }

    public function add() 
    {
        return view("film/add");
    }
}
