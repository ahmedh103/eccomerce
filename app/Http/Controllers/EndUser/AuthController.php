<?php

namespace App\Http\Controllers\EndUser;

use App\Http\Controllers\Controller;


use App\Http\Interfaces\EndUser\AuthInterface;
use App\Http\Requests\Admin\Auth\LoginRequest;
use App\Http\Requests\User\CreateUser;

class AuthController extends Controller
{
    private $authInterface;
    public function __construct(AuthInterface $authInterface)
    {
        $this->authInterface = $authInterface;
    }

    public function index()
    {
        return $this->authInterface->index();
    }

    public function login(LoginRequest $request)
    {
        return $this->authInterface->login($request);
    }

    public  function  logout(){
        return $this->authInterface->logout();
    }

    public function register(CreateUser $request)
    {
        return $this->authInterface->register($request);
    }

}
