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
        $value = $user->profile_picture;
        $extension = $value->getClientOriginalExtension();
        $fileName = $value->getClientOriginalName();
        $fileSize = $value->getClientSize();
        $contentType = substr($value->getMimeType(), 0, 5);
        $encryptedFileName = uniqid() . '.'. $extension;
        $url = storage_path('app\public\upload\\' .$encryptedFileName);
        $value->storeAs('public\upload', $encryptedFileName);
        $user->profile_picture = $url;
        return $this->userRepository->insert($user);
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
