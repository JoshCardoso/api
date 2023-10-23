<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use App\Models\Usuario;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        $teachers = Teacher::getTeacher()->get();
        return $teachers;
    }

    public function store(Request $request)
    {
        $teacher = new Usuario();
        $teacher->first_name = $request->first_name;
        $teacher->last_name = $request->last_name;
        $teacher->email = $request->email;
        $teacher->psswd = $request->psswd;
        $teacher->endereco = $request->endereco;
        $teacher->id_permissao = 2;
        $teacher->save();

        return $teacher;
    }

    public function show(string $id)
    {
        return Teacher::where('id',$id)->get();
    }

    public function update(Request $request, string $id)
    {
        $teacher = Usuario::find($id);
        $teacher->first_name = $request->first_name;
        $teacher->last_name = $request->last_name;
        $teacher->email = $request->email;
        $teacher->psswd = $request->psswd;
        $teacher->endereco = $request->endereco;
        $teacher->save();

        return $teacher;
    }

    public function destroy(string $id)
    {
        $teacher = Usuario::find($id);
        $teacher->delete();
    }
}
