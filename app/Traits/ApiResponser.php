<?php

namespace App\Traits;

use Illuminate\Http\Response;

trait ApiResponser{
    /**
     * Construye una respuesta satisfactoria
     * @param string|array $data
     * @param int $code 
     * @return Illuminate\Http\JsonResponse
     */
    public function successResponse($data, $code = Response::HTTP_OK){
        return response()-> json(['data' => $data],$code);
    }

    /**
     * Construye una respuesta de error
     * @param string $message
     * @param int $code 
     * @return Illuminate\Http\JsonResponse
     */
    public function errorResponse($message, $code){
        return response()-> json(['error' => $message],$code);
    }

}