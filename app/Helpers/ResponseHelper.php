<?php
namespace App\Helpers;

use Illuminate\Http\JsonResponse;

class ResponseHelper
{
    public static function formatResponse($data, $message, $status = 200): JsonResponse
    {
        return response()->json([
            'data' => $data,
            'message' => $message,
        ], $status);
    }

    public static function success($data, $message = 'Operación exitosa', $status = 200): JsonResponse
    {
        return self::formatResponse($data, $message, $status);
    }

    public static function error($message, $status = 500, $data = null): JsonResponse
    {
        return self::formatResponse($data, $message, $status);
    }

 
}
