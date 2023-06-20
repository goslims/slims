<?php
use SLiMS\Http\Router\Route;

Route::get('/api', function() {
    return response()->json(['status' => true, 'message' => 'Welcome to APi!']);
});