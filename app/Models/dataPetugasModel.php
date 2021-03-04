<?php

namespace App\Models;

use CodeIgniter\Model;

class dataPetugasModel extends Model
{
    protected $table = 'petugas';
    protected $allowedFields = ['nama_petugas', 'target', 'realisasi'];
}
