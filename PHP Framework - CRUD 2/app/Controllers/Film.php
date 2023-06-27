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

    // function untuk menampilkan data dalam bentuk table dengan route index didalam folder film
    public function index()
    {
        $data['dataFilm'] = $this->film->getAllDataJoin();
        return view("film/table", $data);
    }

    // method untuk menampilkan data genre
    public function genre()
    {
        $data['dataFilm'] = $this->film->getAllDataJoin();
        return view("film/genre", $data);
    }

    //method untuk menampilkan data dalam bentuk card
    public function all()
    {
        $data['data_film'] = $this->film->getAllDataJoin();
        return view("film/index", $data);
    }

    //method untuk mendirect tambah data dan menampilkan daftar genre
    public function add()
    {
        $data['genre'] = $this->genre->getAllData();
        $data['errors'] = session('errors');
        return view("film/add", $data);
    }

    //method untuk menambahkan data dan memvalidasi form
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

        if (!$validation) {
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

    //method untuk mendirect form update data dan menampilkan data berdasarkan id
    public function update($id)
    {
        $data["genre"] = $this->genre->getAllData();
        $data["errors"] = session('errors');
        $data["dataFilm"] = $this->film->getDataByID($id);
        return view("film/edit", $data);
    }

    //method untuk mengupdate data
    public function edit()
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
            // ubah rulesnya
            'cover' => [
                'rules' => 'mime_in[cover,image/jpg,image/jpeg,image/webp,image/png]|max_size[cover,2048]',
                'errors' => [
                    'uploaded' => 'Kolom Cover harus berisi File',
                    'mime_in' => 'Tipe file pada kolom harus berupa JPG, JPEG, PNG',
                    'max_size' => 'Ukuran file berisi file melebihi batas maksimum'
                ]
            ]
        ]);

        if (!$validation) {
            $errors = \Config\Services::validation()->getErrors();

            return redirect()->back()->withInput()->with('errors', $errors);
        }

        // mengambil data lama
        $film = $this->film->find($this->request->getPost('id'));

        // taambah request id
        $data = [
            'id' => $this->request->getPost('id'),
            'nama_film' => $this->request->getPost('nama_film'),
            'id_genre' => $this->request->getPost('id_genre'),
            'duration' => $this->request->getPost('duration'),

        ];

        // mengecek afakah ada cover yang di upload
        $cover = $this->request->getFile('cover');
        if ($cover->isValid() && !$cover->hasMoved()) {
            //generate nama file yang unik
            $imageName = $cover->getRandomName();
            //pindahkan file ke direktori penyimpanan
            $cover->move(ROOTPATH . 'public/assets/cover/', $imageName);
            //hapus file gambar lama jika ada
            if ($film['cover']) {
                unlink(ROOTPATH . 'public/assets/cover/' . $film['cover']);
            }
            // jika ada tambahkan array cover pada variabel $data
            $data['cover'] = $imageName;
        }

        $this->film->save($data);
        //ubah pesannya
        session()->setFlashdata('success', 'Data berhasil diupdate.');
        return redirect()->to("/film");
    }

    public function destroy($id)
    {
        $this->film->delete($id);
        session()->setFlashdata('success', 'Data berhasil dihapus');
        return redirect()->to('/film');
    }
}
