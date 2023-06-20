<?php
use SLiMS\Http\Router\Route;

Route::get('/', fn() => response()->html('<h1>Welcome!</h1>'));