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

    //menampilkan data film dengan tampilan table
    public function index()
    {
        $data['dataFilm'] = $this->film->getAllDataJoin();
        return view("film/table", $data);
    }

    //menampilkan data dengan tampilan card
    public function all()
    {
        $data['data_film'] = $this->film->getAllDataJoin();
        return view("film/index", $data);
    }
}
