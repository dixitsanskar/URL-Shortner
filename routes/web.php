<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShortLinkController;

Route::get('/',[ShortLinkController::class, 'index']);

Route::get('generate-shorten-link', [ShortLinkController::class,'index']);
Route::post('generate-shorten-link', [ShortLinkController::class,'store'])->name('generate.shorten.link.post');
Route::get('{code}', [ShortLinkController::class, 'shortenLink'])->name('shorten.link');
// Route::get('/test-mongo', function () {
//     try {
//         $collections = DB::connection('mongodb')->listCollections();
//         return response()->json($collections);
//     } catch (Exception $e) {
//         return response()->json(['error' => $e->getMessage()]);
//     }
// });
