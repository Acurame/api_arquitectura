<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Piloto;

class pilotosController extends Controller
{
    public function index()
    {
        return Piloto::all();
    }
 
    public function show($id)
    {
        return Piloto::find($id);
    }

    public function store(Request $request)
    {
        return Piloto::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $article = Piloto::findOrFail($id);
        $article->update($request->all());

        return $article;
    }

    public function delete(Request $request, $id)
    {
        $article = Piloto::findOrFail($id);
        $article->delete();

        return 204;
    }
}
