<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Editora;
use Illuminate\Http\Request;


class EditoraController extends Controller
{
    public function index()
    {
     return Editora::all();
    }
   
    public function store(Request $request)
    {
        Editora::create($request->all());
    }
   
    public function show($id)
    {
     return Editora::findorfail($id);
    }
   
    public function update(Request $request, $id)
    {
     $Editora = Editora::findorfail($id);
     $Editora->update($request->all());
    }
   
    public function destroy($id)
    {
     $Editora = Editora::findorfail($id);
     $Editora->delete();
    }
   
}

