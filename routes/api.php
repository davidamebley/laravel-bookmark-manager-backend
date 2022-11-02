<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookmarkController;
use App\Http\Controllers\FolderController;

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
// Bookmark routes
Route::resource('bookmarks', BookmarkController::class);
// Folder routes
Route::resource('folders', FolderController::class);
// Special bookmark route whose function was not automatically generated
Route::get('bookmarks/folders/{folder_id}', [BookmarkController::class, 'show_folder_bookmarks']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
