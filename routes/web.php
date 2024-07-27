<?php

use App\Http\Controllers\ShortLinkController;
use Illuminate\Support\Facades\Route;

Route::get('/',[ShortLinkController::class, 'index']);

Route::get('generate-shorten-link', [ShortLinkController::class,'index']);
Route::post('generate-shorten-link', [ShortLinkController::class,'store'])->name('generate.shorten.link.post');
Route::get('{code}', [ShortLinkController::class, 'shortenLink'])->name('shorten.link');

