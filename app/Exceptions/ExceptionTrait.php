<?php

namespace App\Exceptions;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpFoundation\Response;


trait ExceptionTrait
{
	public function aipException($request, $e){

		if ($e instanceof ModelNotFoundException) {
                return response()->json([
                    'errors' => 'Model Product Not Found'
                ], Response::HTTP_NOT_FOUND);
            }
            if ($e instanceof NotFoundHttpException) {
                return response()->json([
                    'errors' => 'Incorrect Route'
                ], Response::HTTP_NOT_FOUND);
            }
	}
}