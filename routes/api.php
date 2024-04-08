<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\studentController;

/*Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');*/

/*Route::get('/students', function(){
    return 'Obteniendo lista de estudiantes';
});*/

Route::get('/students', [studentController::class, 'index']);

// Route::get('/students/{id}', function(){
//     return 'Obteniendo un estudiante';
// });

Route::get('/students/{id}', [studentController::class, 'show']);

// Route::post('/students', function(){
//     return 'Creando estudentes';
// });
Route::post('/students', [studentController::class, 'store']);

// Route::put('/students/{id}', function(){
//     return 'Actualizando estudiante';
// });

Route::put('/students/{id}', [studentController::class, 'update']);

// Route::delete('/students/{id}', function(){
//     return 'Eliminando estudiante';
// });

Route::delete('/students/{id}', [studentController::class, 'destroy']);

Route::patch('/students/{id}', [studentController::class, 'updatePartial']);
