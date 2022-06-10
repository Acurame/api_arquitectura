<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\vehículo;

class vehiculosController extends Controller
{
    public function index()
    {
        return vehículo::all();
    }
 
    public function show($id)
    {
        return vehículo::find($id);
    }

    public function store(Request $request)
    {
        return vehículo::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $article = vehículo::findOrFail($id);
        $article->update($request->all());

        return $article;
    }

    public function delete(Request $request, $id)
    {
        $article = vehículo::findOrFail($id);
        $article->delete();

        return 204;
    }
}
