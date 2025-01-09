<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SampleController;

// APIルートの定義
Route::get('/sample-data', [SampleController::class, 'getSampleData'])->name('api.sample');
