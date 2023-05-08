<?php

namespace App\Services;

use App\Models\User;

class UserService extends Service
{
    protected $user;
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function getOne($value, $column = 'id')
    {
        return $this->user->where($column, $value)->first();
    }
}
