<?php

namespace Controllers\API;

/**
 * Required headers
 */
header('Content-Type: application/json; charset=UTF-8');
header('Access-Control-Allow-Origin: ' . URL_ROOT);
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS');
header('Access-Control-Allow-Credentials: false');
header('Access-Control-Allow-Headers: Origin, Accept, Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With');
header('Access-Control-Max-Age: 3600');

use App\Database;
use App\Helper;
use App\Middleware;
use Models\Common;

class UsersController
{
    public function index()
    {
        $response = Common::index();
        if (count($response) > 0) {
            http_response_code(200);
            echo json_encode($response);
        } else {
            http_response_code(404);
            echo json_encode(['message' => 'No result!']);
        }
    }

}
