<?php

// ... otras rutas
use App\Http\Controllers\ArticleController;

Route::get('/articles', [ArticleController::class, 'index']);
