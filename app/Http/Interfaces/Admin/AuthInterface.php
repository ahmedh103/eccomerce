<?php

namespace App\Http\Interfaces\Admin;

interface AuthInterface
{
    public function index();
    public function login($request);
    public function logout();
    public function register($request);
}
