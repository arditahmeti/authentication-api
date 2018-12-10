<?php

namespace App\Http\Services\Implementations;

use App\Entities\User;
use App\Http\Services\Interfaces\IRegisterService;
use App\Http\Services\Interfaces\IUserService;

class RegisterService implements IRegisterService
{
    protected $userService;

    public function __construct(IUserService $userService)
    {
        $this->userService = $userService;
    }

    public function insert(User $user)
    {
        return $this->userService->insert($user);
    }
}