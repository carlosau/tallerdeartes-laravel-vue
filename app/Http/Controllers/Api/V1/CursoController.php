<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Curso;
use App\Http\Requests\StoreCursoRequest;
use App\Http\Resources\V1\CursoResource;
use App\Http\Resources\V1\CursoCollection;

class CursoController extends Controller
{
    //GET ALL CURSOS
    public function index()
    {
        return new CursoCollection(Curso::paginate(1));
    }

    //STORE
    public function store(StoreCursoRequest $request)
    {
        Curso::create($request->validated());
        return response()->json('Curso Criado!');
    }

    //UPDATE
    public function update(StoreCursoRequest $request, Curso $curso)
    {
        $curso->update($request->validated());
        return response()->json('Curso Updated!');
    }

    //GET CURSO
    public function show(Curso $curso)
    {
        return new CursoResource($curso);
    }

    //DELETE CURSO
    public function destroy(Curso $curso)
    {
        $curso->delete();
        return response()->json('Curso deleted!');
    }
}
