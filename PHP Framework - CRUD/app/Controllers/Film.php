<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\FilmModel;
use App\Models\GenreModel;


class Film extends BaseController
{
    protected $film;
    protected $genre;

    public function __construct()
    {
        $this->film = new FilmModel();
        $this->genre = new GenreModel();
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
        $data['genre'] = $this->genre->getAllData();
        $data['errors'] = session('errors');
        return view("film/add", $data);
    }

    public function store()
    {
        $validation = $this->validate([
            'nama_film' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kolom Nama Film harus diisi'
                ]
            ],
            'id_genre' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kolom Genre Harus diisi'
                ]
            ],
            'duration' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kolom Durasi Harus diisi'
                ]
            ],
            'cover' => [
                'rules' => 'uploaded[cover]|mime_in[cover,image/jpg,image/jpeg,image/webp,image/png]|max_size[cover,2048]',
                'errors' => [
                    'uploaded' => 'Kolom Cover harus berisi File',
                    'mime_in' => 'Tipe file pada kolom harus berupa JPG, JPEG, PNG',
                    'max_size' => 'Ukuran file berisi file melebihi batas maksimum'
                ]
            ]
        ]);

        if(!$validation) {
            $errors = \Config\Services::validation()->getErrors();

            return redirect()->back()->withInput()->with('errors', $errors);
        }

        $image = $this->request->getFile('cover');

        //Generate nama file yang unik
        $imageName = $image->getRandomName();
        //pindahkan file ke direktory penyimpanan
        $image->move(ROOTPATH . 'public/assets/cover', $imageName);

        $data = [
            'nama_film' => $this->request->getPost('nama_film'),
            'id_genre' => $this->request->getPost('id_genre'),
            'duration' => $this->request->getPost('duration'),
            'cover' => $imageName,
        ];
        $this->film->save($data);
        session()->setFlashdata('success', 'Data berhasil disimpan.');
        return redirect()->to("/film");
    }
}
