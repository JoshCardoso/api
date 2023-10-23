<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use Illuminate\Http\Request;

class ClasseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Classe::all();
    }
    public function store(Request $request)
    {
        $classe = new Classe();
        $classe->id_curso = $request->id_curso;
        $classe->id_aluno = $request->id_aluno;
        $classe->save();
    }

    public function show(string $id)
    {
        return Classe::where('id',$id)->get();  
    }

    public function update(Request $request,string $id)
    {
        $classe = Classe::find($id);
        $classe->id_curso = $request->id_curso;
        $classe->id_aluno = $request->id_aluno;
        $classe->save();
    }

    public function destroy(string $id)
    {
        $classe = Classe::find($id);
        $classe->delete;
    }
}
