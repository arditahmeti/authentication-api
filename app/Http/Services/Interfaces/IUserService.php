<?php

namespace App\Http\Services\Interfaces;

use App\Entities\User;
use App\Repositories\Interfaces\IUserRepository;

interface IUserService
{
    public function __construct(IUserRepository $userRepository);

    public function get();

    public function getById($id);

    public function insert(User $user);

    public function update(User $user);

    public function delete($id);
}
