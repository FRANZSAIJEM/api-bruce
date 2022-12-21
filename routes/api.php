<?php
use App\Http\Controllers\LendeeController;
use App\Http\Controllers\BookController;
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

Route::get('/lendees',[LendeeController::class, 'index']);
Route::get('/lendees/{lendee}',[LendeeController::class,'show']);
Route::post('/lendees',[LendeeController::class, 'store']);
Route::put('/lendees/{lendee}', [LendeeController::class, 'update']);
Route::delete('/lendees/{lendee}',[LendeeController::class, 'destroy']);

Route::get('/books',[BookController::class, 'index']);
Route::get('/books/{book}',[BookController::class,'show']);
Route::post('/books',[BookController::class, 'store']);
Route::put('/books/{book}', [BookController::class, 'update']);
Route::delete('/books/{book}',[BookController::class, 'destroy']);
