<?php
use SLiMS\Http\Router\Route;

Route::get('/oai', function() {
    return response()->json(['status' => true, 'message' => 'Welcome to OAI!']);
});