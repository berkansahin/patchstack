<?php

use App\Http\Controllers\VulnerabilityController;
use Illuminate\Support\Facades\Route;

Route::apiResource('vulnerability', VulnerabilityController::class);
