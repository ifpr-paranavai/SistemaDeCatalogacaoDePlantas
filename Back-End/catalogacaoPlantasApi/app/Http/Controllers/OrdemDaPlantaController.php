<?php

namespace App\Http\Controllers;

use App\Models\OrdemPlanta;
use Illuminate\Http\Request;

class OrdemDaPlantaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ordensPlantas = OrdemPlanta::all();
        return response()->json($ordensPlantas);
    }

    public function show($id)
    {
        $ordemPlanta = OrdemPlanta::findOrFail($id);
        return response()->json($ordemPlanta);
    }

    public function store(Request $request)
    {
        $ordemPlanta = OrdemPlanta::create($request->all());
        return response()->json($ordemPlanta, 201);
    }

    public function update(Request $request, $id)
    {
        $ordemPlanta = OrdemPlanta::findOrFail($id);
        $ordemPlanta->update($request->all());
        return response()->json($ordemPlanta);
    }

    public function destroy($id)
    {
        $ordemPlanta = OrdemPlanta::findOrFail($id);
        $ordemPlanta->delete();
        return response()->json(null, 204);
    }
}
