<?php

namespace App\Classes;

class ResponsesBody
{

    /**
     * responseSuccess
     *
     * @param  mixed $message
     * @param  mixed $code
     * @param  mixed $result
     * @return void
     */
    static public function responseSuccess($message, $code, $result)
    {
        $response = [
            'success' => true,
            'message' => $message,
            'code' => $code,
            'data'    => $result
        ];
        return response()->json($response, $code);
    }

    /**
     * responseError
     *
     * @param  mixed $message
     * @param  mixed $code
     * @param  mixed $errorMessages
     * @return void
     */
    static public function responseError($message, $code = 404, $errorMessages = [])
    {
        $response = [
            'success' => false,
            'message' => $message,
            'code' => $code
        ];

        if (!empty($errorMessages)) {
            $response['data'] = $errorMessages;
        }
        return response()->json($response, $code);
    }
}
