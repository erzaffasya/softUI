<?php

use App\Models\Kelas;

use App\Http\Controllers\API\KelasController;
use App\Http\Controllers\API\KontenDokumenController;
use App\Http\Controllers\API\KontenVideoController;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\DownloadControler;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
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

// Public routes
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/kelas', [KelasController::class, 'index']);
Route::get('/kelas/{id}', [KelasController::class, 'show']);
Route::get('/kelas/search/{name}', [KelasController::class, 'search']);
Route::get('/kelas/{id}/video', [KelasController::class, 'kelas_video']);
Route::get('/kelas/{id}/dokumen', [KelasController::class, 'kelas_dokumen']);
Route::post('/kelas/{id}/video', [KontenVideoController::class, 'store']);
Route::post('/kelas/{id}/dokumen', [KontenDokumenController::class, 'store']);
Route::get('/kelas/search/{name}', [KelasController::class, 'search']);

Route::get('/dokumen', [KontenDokumenController::class, 'index']);
Route::get('/dokumen/{id}', [KontenDokumenController::class, 'show']);
Route::get('/dokumen/search/{name}', [KontenDokumenController::class, 'search']);

Route::get('/video', [KontenVideoController::class, 'index']);
Route::get('/video/{id}', [KontenVideoController::class, 'show']);
Route::get('/vido/search/{name}', [KontenVideoController::class, 'search']);

// Download Route
Route::get('download/{filename}', [DownloadControler::class, 'index']);
Route::get('/dokumen/{id}/download', [KontenDokumenController::class, 'download']);

// Protected routes
Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::post('/kelas', [KelasController::class, 'store']);
    Route::put('/kelas/{id}', [KelasController::class, 'update']);
    Route::delete('/kelas/{id}', [KelasController::class, 'destroy']);
    Route::post('/logout', [AuthController::class, 'logout']);

    Route::put('/dokumen/{id}', [KontenDokumenController::class, 'update']);
    Route::delete('/dokumen/{id}', [KontenDokumenController::class, 'destroy']);

    Route::put('/video/{id}', [KontenVideoController::class, 'update']);
    Route::delete('/video/{id}', [KontenVideoController::class, 'destroy']);
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
