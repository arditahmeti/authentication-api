<?php

namespace App\Repositories\Implementations;

use Illuminate\Support\Facades\Auth;

use App\Entities\User;
use App\Repositories\Interfaces\IUserRepository;


class UserRepository implements IUserRepository
{
    public function __construct()
    {

    }

    public function get()
    {
        return User::all();
    }

    public function getById($id)
    {
        return User::findOrFail($id);
    }

    public function insert(User $user)
    {
        $user->password = bcrypt($user->password);
        $user->save();
        return $user;
    }

    public function update(User $user)
    {
        if (Auth::check() && !($user->password == Auth::user()->getAuthPassword())) {
            $user->password = bcrypt($user->password);
        }
        $user->update();
        return $user;
    }

    public function delete($id)
    {
        return $this->getById($id)->delete();
    }

}
