<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    //INDEX
    public function index()
    {
        return response()->json('Cursos Index!');
    }

}
