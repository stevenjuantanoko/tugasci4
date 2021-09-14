<?php

namespace App\Models;

use CodeIgniter\Model;

class ItemsModel extends Model
{
    protected $table = "items";
    protected $primaryKey = "id_barang";
    protected $returnType = "object";
    protected $useTimestamps = true;
    protected $allowedFields = ['id_barang', 'nama_barang', 'jumlah_barang'];
}