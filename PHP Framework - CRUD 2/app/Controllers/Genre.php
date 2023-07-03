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

    public function index()
    {
        $data['genre'] = $this->genre->getAllData();
        return view("genre/index", $data);
    }

    public function add()
    {
        $data['genre'] = $this->genre->getAllData();
        $data['errors'] = session('errors');
        return view("genre/add", $data);
    }

    public function store()
    {
        $validation = $this->validate([
            'nama_genre' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kolom Nama Genre harus diisi'
                ]
            ]
        ]);

        if (!$validation) {
            $errors = \Config\Services::validation()->getErrors();

            return redirect()->back()->withInput()->with('errors', $errors);
        }


        $data = ['nama_genre' => $this->request->getPost('nama_genre')];
        $this->genre->save($data);
        session()->setFlashdata('success', 'Data berhasil disimpan.');
        return redirect()->to("/genre");
    }

    public function update($id)
    {
        $data["errors"] = session('errors');
        $data["genre"] = $this->genre->getDataByID($id);
        return view("genre/edit", $data);
    }


    public function edit()
    {
        $validation = $this->validate([
            'nama_genre' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kolom Nama Genre harus diisi'
                ]
            ]
        ]);

        if (!$validation) {
            $errors = \Config\Services::validation()->getErrors();
            return redirect()->back()->withInput()->with('errors', $errors);
        }

        $id_genre = $this->request->getPost('id');
        $data = [
            'nama_genre' => $this->request->getPost('nama_genre'),
        ];

        $this->genre->update($id_genre, $data);

        session()->setFlashdata('success', 'Data berhasil diupdate.');
        return redirect()->to("/genre");
    }



    public function destroy($id)
    {
        $this->genre->delete($id);
        session()->setFlashdata('success', 'Data berhasil dihapus');
        return redirect()->to('/genre');
    }
}
