<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ClientesController;

Route::get('/clientes',[ClientesController::class,'index']);
