<?php

namespace App\Http\Controllers;

use App\Http\Interfaces\EndUser\RegisterInterface;
use App\Http\Requests\User\CreateUser;
use Illuminate\Http\Request;

class RegisterController extends Controller
{

    protected  $registerInterface;
    public function __construct(RegisterInterface $registerInterface)
    {
        $this->registerInterface = $registerInterface;
    }

    public  function  index()
    {
        return $this->registerInterface->index();
    }

    public function register(CreateUser $request)
    {
        return $this->registerInterface->register($request);
    }

}
