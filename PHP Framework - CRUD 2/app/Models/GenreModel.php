<?php

namespace App\Models;

use CodeIgniter\Model;

class GenreModel extends Model
{
    protected $table            = 'genre';
    protected $primaryKey       = 'id_genre';
    protected $useAutoIncrement = true;
    protected $allowedFields       = ['nama_genre'];

    //fungsi untuk menampilkan semua data dalam table
    public function getAllData()
    {
        return $this->findAll();
    }
}
