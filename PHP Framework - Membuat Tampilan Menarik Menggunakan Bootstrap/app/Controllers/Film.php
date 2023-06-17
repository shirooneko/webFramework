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

    public function index(){
        $data['dataFilm'] = $this->film->getAllDataJoin();
        return view("film/table", $data);
    }

    public function all()
    {
        $data['data_film'] = $this->film->getAllDataJoin();
        return view("film/index", $data);
    }

    public function findById()
    {
        dd($this->film->getDataById(1));
    }

    public function findByName()
    {
        dd($this->film->getDataBy('suzume'));
    }

    public function findByOrder()
    {
        dd($this->film->getOrderBy());
    }

    public function findLimit()
    {
        dd($this->film->getLimit());
    }

    public function findColumn()
    {
        dd($this->film->getFilmGenre());
    }
}
