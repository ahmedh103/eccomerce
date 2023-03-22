<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Http\Interfaces\Admin\AuthInterface;
use App\Http\Requests\Admin\Auth\LoginRequest;

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


}
