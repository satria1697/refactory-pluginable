<?php

namespace App\Http\Controllers\api\download;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;

class plugin extends Controller
{
    public function index(Request $request)
    {
        $applet = $request->input('applet');

        if (is_null($applet)) {
            return Response::json([
                'error'=>'error'
            ], 403);
        }

        return Storage::download('public/plugins/'.$applet.'.zip');
    }
}
