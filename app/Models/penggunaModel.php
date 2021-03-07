<?php

namespace App\Models;

use CodeIgniter\Model;
use Myth\Auth\Authentication\AuthenticateInterface;
use Myth\Auth\Authentication\LocalAuthentication;

class penggunaModel extends Model
{
    protected $table = 'users';
    protected $allowedFields = ['username'];
}
