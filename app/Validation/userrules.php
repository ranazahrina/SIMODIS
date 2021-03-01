<?php

namespace App\Validation;

use App\Models\databps;

class userrules
{

    public function validateUser(string $str, string $fields, array $data)
    {
        $model = new databps();
        $user = $model->where('email', $data['email'])
            ->first();

        if (!$user)
            return false;

        return password_verify($data['password'], $user['password']);
    }
}
