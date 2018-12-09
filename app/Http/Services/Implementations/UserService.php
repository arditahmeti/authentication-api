<?php

namespace App\Http\Services\Implementations;

use App\Entities\User;
use App\Http\Services\Interfaces\IUserService;
use App\Repositories\Interfaces\IUserRepository;

class UserService implements IUserService
{
    protected $userRepository;

    public function __construct(IUserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function get()
    {
        //TODO
    }

    public function getById($id)
    {
        //TODO
    }

    public function insert(User $user)
    {
        //TODO
    }

    public function update(User $user)
    {
        //TODO
    }

    public function delete($id)
    {
        //TODO
    }

}
