<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\GenreModel;

class Genre extends BaseController
{
    protected $genre;

    public function __construct()
    {
        $this->genre = new GenreModel();
    }

    public function all()
    {
        $data['genre'] = $this->genre->getAllData();
        return view("film/genre", $data);
    }
}
