<?php

namespace App\Http\Controllers;

model 

use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class ProductoController extends Controller
{
    
    
    
    
    public function index_GET()
    {
        return view('producto.index');
    }
};

Route::get('/producto', [ProductoController::class, 'index_GET']);
