<?php

namespace App\Http\Controllers;

use App\Http\Interfaces\Admin\AuthInterface;
use App\Http\Requests\Admin\Auth\LoginRequest;
use Illuminate\Http\Request;

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

    public function register(U $request)
    {
        return $this->authInterface->register($request);
    }

}
