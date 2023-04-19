<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use App\Http\Traits\ApiResponseTrait;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    use ApiResponseTrait;

    public function index()
    {
         $users = User::paginate();
         $data = UserResource::collection($users);
        return $this->apiResponse('200', 'Success', '', $data->response()->getData(true));
    }
}
