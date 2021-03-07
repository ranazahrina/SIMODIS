<?php

namespace App\Models;

use CodeIgniter\Model;

class penggunaModel extends Model
{
    protected $table = 'users';
    protected $allowedFields = ['username'];
}
