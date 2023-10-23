<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use App\Models\Usuario;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    public function index()
    {
        $alunos = Aluno::getAluno()->get();
        return $alunos;
    }

    public function store(Request $request)
    {
        $alunos = new Usuario();
        $alunos->first_name = $request->first_name;
        $alunos->last_name = $request->last_name;
        $alunos->email = $request->email;
        $alunos->psswd = $request->psswd;
        $alunos->endereco = $request->endereco;
        $alunos->id_permissao = 3;
        $alunos->save();
    }

    public function show(string $id)
    {
        return Aluno::where('id', $id)->get();
    }

    public function update(Request $request, string $id)
    {
        $alunos = Usuario::find($id);
        $alunos->first_name = $request->first_name;
        $alunos->last_name = $request->last_name;
        $alunos->email = $request->email;
        $alunos->psswd = $request->psswd;
        $alunos->endereco = $request->endereco;
        $alunos->save();
    }

    public function destroy(string $id)
    {
        $aluno = Usuario::find($id);
        $aluno->delete();
    }
}
