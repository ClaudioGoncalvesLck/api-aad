<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Livro;
use Illuminate\Http\Request;


class LivroController extends Controller
{
    public function index()
    {
     return Livro::all();
    }
   
    public function store(Request $request)
    {
        Livro::create($request->all());
    }
   
    public function show($id)
    {
     return Livro::findorfail($id);
    }
   
    public function update(Request $request, $id)
    {
     $Livro = Livro::findorfail($id);
     $Livro->update($request->all());
    }
   
    public function destroy($id)
    {
     $Livro = Livro::findorfail($id);
     $Livro->delete();
    }
   
}
