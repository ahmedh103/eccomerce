<?php

namespace App\Exceptions;

use App\Http\Traits\ApiResponseTrait;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Validation\ValidationException;
use Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Throwable;
use function response;
use function view;

class Handler extends ExceptionHandler
{
    use ApiResponseTrait;
    /**
     * A list of exception types with their corresponding custom log levels.
     *
     * @var array<class-string<\Throwable>, \Psr\Log\LogLevel::*>
     */
    protected $levels
        = [
            //
        ];

    /**
     * A list of the exception types that are not reported.
     *
     * @var array<int, class-string<\Throwable>>
     */
    protected $dontReport
        = [
            //
        ];

    /**
     * A list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash
        = [
            'current_password',
            'password',
            'password_confirmation',
        ];

    /**
     * Register the exception handling callbacks for the application.
     */
    public function register():void
    {
        $this->reportable(function (Throwable $e) {});
    }

    public function render($request, Throwable $e)
    {
        if ($e instanceof NotFoundHttpException)
        {
            return $this->apiResponse(404,"error 404", $request->url() . ' Not Found, try with correct url');
        }
        if($e instanceof MethodNotAllowedHttpException)
        {
            return $this->apiResponse(405,"error 405",  $request->method() . ' method Not allow for this route, try with correct method');
        }
        if ($e instanceof ValidationException) {
            return $this->apiResponse(422,'Unprocessable Content',$e->errors());
        }
    }
}
