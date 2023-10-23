<?php

namespace App\Http\Controllers;

use App\Models\Materia;
use Illuminate\Http\Request;

class MateriaController extends Controller
{
    public function index()
    {
        $materia = Materia::all();
        return $materia;
    }

    public function store(Request $request)
    {
        $materia = new Materia();
        $materia->materia = $request->materia;
        $materia->save();
    }

    public function show(string $id)
    {
        return Materia::where('id',$id)->get();
    }

    public function update(Request $request,string $id)
    {
        $materia = Materia::find($id);
        $materia->materia = $request->materia;
        $materia->save();
    }

    public function destroy(string $id)
    {
        $materia = Materia::find($id);
        $materia->delete;
    }
}
