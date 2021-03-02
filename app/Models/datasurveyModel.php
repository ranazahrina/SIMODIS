<?php

namespace App\Models;

use CodeIgniter\Model;

class datasurveyModel extends Model
{
    protected $table = 'data';
    protected $allowedFields = [
        'jenis_survey', 'responden', 'waktu_pelaksanaan', 'waktu_survey',
        'nama_petugas', 'dokumen_masuk'
    ];
    protected $useTimestamps = true;
}
