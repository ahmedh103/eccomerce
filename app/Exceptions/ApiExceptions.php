<?php

namespace App\Exceptions;

use App\Http\Traits\ApiResponseTrait;
use Illuminate\Validation\ValidationException;
use Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class Exceptions
{
    use ApiResponseTrait;
    public function api($e,$request)
    {
        if ($e instanceof NotFoundHttpException)
        {
            return $this->apiResponse(404,"error 404", $request->url() . ' Not Found, try with correct url');
        }
    }

    public function web($e,$request)
    {
        if ($e instanceof NotFoundHttpException)
        {
            return $this->apiResponse(404,"error 404", $request->url() . ' Not Found, try with correct url');
        }
    }


}
