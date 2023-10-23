<?php

namespace App\Http\Controllers;

use App\Models\Presenca;
use Illuminate\Http\Request;

class PresencaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Presenca::all();
    }

    public function store(Request $request)
    {
        $presenca = new Presenca();
        $presenca->id_t_presenca = $request->id_t_presenca;
        $presenca->id_classe = $request->id_classe;
        $$presenca->data = $request->data;
        $presenca->save();

        return $presenca;
    }

    public function show(string $id)
    {
        return Presenca::where('id_classe',$id)->get();
    }

    public function update(Request $request, string $id)
    {
        $presenca = Presenca::find($id);
        $presenca->id_t_presenca = $request->id_t_presenca;
        $presenca->id_classe = $request->id_classe;
        $$presenca->data = $request->data;
        $presenca->save();

        return $presenca;
    }

    public function destroy(string $id)
    {
        $presenca = Presenca::find($id);
        $presenca->delete();
    }
}
