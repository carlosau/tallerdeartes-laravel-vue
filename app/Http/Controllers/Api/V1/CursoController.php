<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Curso;
use App\Http\Requests\StoreCursoRequest;

class CursoController extends Controller
{
    //INDEX
    public function index()
    {
        return response()->json('Cursos Index!');
    }

    //STORE
    public function store(StoreCursoRequest $request)
    {
        Curso::create($request->validated());
        return response()->json('Curso Criado!');
    }

}
