<?php

namespace App\Http\Services\Interfaces;

use App\Entities\User;

interface IRegisterService
{
    public function __construct(IUserService $userService);

    public function insert(User $user);
}