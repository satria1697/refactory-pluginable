<?php

use App\Http\Controllers\api\download\plugin;
use App\Http\Controllers\api\plugin\authenticate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('plugins/download', [plugin::class, 'index']);

Route::get('plugins/authenticate', [authenticate::class, 'index']);
