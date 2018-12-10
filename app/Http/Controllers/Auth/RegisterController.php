<?php

namespace App\Http\Controllers\Auth;

use App\Http\Requests\RegisterValidation;
use App\Http\Services\Interfaces\IRegisterService;
use App\Entities\User;
use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

   // use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home', $registerService;

    /**
     * Create a new controller instance.
     *
     * @param IRegisterService $registerService
     */
    public function __construct(IRegisterService $registerService)
    {
        $this->middleware('guest');
        $this->registerService = $registerService;
    }

    public function store(RegisterValidation $request)
    {
        $user = new User($request->all());
        $user->profile_picture = $request->file('profile_picture');
        return $this->registerService->insert($user);
    }
}
