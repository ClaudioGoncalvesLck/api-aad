<?php

use Illuminate\Support\Facades\Route;

Route::apiResource('autores', 'api\AutorController');
Route::apiResource('livros', 'api\LivroController');
Route::apiResource('editoras', 'api\EditoraController');

