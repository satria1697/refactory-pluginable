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
        $workspace = $request->input('workspace');

        if (is_null($workspace)) {
            return Response::json([
                'error'=>'error'
            ], 403);
        }

        if ($workspace == 'refactory') {
            return Response::json([
              "plugin" => [
                  "calendar",
                  "workboard",
              ]
            ]);
        } else {
            return Response::json([
                "plugin" => [
                    "calendar",
                    "workboard",
                    "dashboard",
                    "project",
                    "hiring"
                ]
            ]);
        }
    }
}
