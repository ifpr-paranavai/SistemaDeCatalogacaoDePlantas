<?php

namespace App\Http\Controllers;

use App\Models\ClassePlanta;
use Illuminate\Http\Request;

class ClassePlantaController extends Controller
{
    public function index()
    {
        $classe_plantas = ClassePlanta::all();
        return response()->json($classe_plantas);
    }

    public function show($id)
    {
        $classe_plantas = ClassePlanta::findOrFail($id);
        return response()->json($classe_plantas);
    }

    public function store(Request $request)
    {
        $classe_plantas = ClassePlanta::create($request->all());
        return response()->json($classe_plantas, 201);
    }

    public function update(Request $request, $id)
    {
        $classe_plantas = ClassePlanta::findOrFail($id);
        $classe_plantas->update($request->all());
        return response()->json($classe_plantas);
    }

    public function destroy($id)
    {
        $classe_plantas = ClassePlanta::findOrFail($id);
        $classe_plantas->delete();
        return response()->json(null, 204);
    }
}
