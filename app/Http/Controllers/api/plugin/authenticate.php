<?php

namespace App\Http\Controllers\api\plugin;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class authenticate extends Controller
{
    public function index(Request $request): JsonResponse
    {
        $who = $request->who;

        if (is_null($who)) {
            return Response::json([
                'error'=>'error'
            ], 403);
        }

        if ($who == 'rsp') {
            return Response::json([
              "plugin" => [
                  "dashboard",
                  "project",
                  "hiring"
              ]
            ]);
        } else {
            return Response::json([
                "plugin" => [
                    "calendar",
                    "workboard"
                ]
            ]);
        }
    }
}
