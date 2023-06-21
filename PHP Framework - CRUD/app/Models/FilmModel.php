<?php

namespace App\Models;

use CodeIgniter\Model;

class FilmModel extends Model
{
    protected $table            = 'film';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $allowField       = [];

    public function getAllDataJoin(){
        $query = $this->db->table("film")
                ->select("film.*, genre.nama_genre")
                ->join("genre","genre.id_genre  = film.id_genre");
                return $query->get()->getResultArray();
    }

    //fungsi untuk menampilkan semua data dalam table
    public function getAllData()
    {
        return $this->findAll();
    }

    //fungsi menampilkan data table berdasarkan id
    public function getDataById($id)
    {
        return $this->find($id);
    }

    //fungsi menampilkan data bedasaekan judul
    public function getDataBy($data)
    {
        return $this->where('nama_film', $data)->findAll();
    }

    //fungsi menampilkan data sesuai urutan secara desc
    public function getOrderBy()
    {
        return $this->orderBy('created_at', 'desc')->findAll();
    }

    //fungsi menampilkan data dengan limit
    public function getLimit()
    {
        return $this->limit(5)->get()->getResultArray();
    }

    //menampilkan data dengan fungsi builder 
    public function getFilmGenre()
    {
        $builder = $this->db->table('film');
        $builder->select('film.genre');
        $query = $builder->get();
        return $query->getResult();
    }
}
