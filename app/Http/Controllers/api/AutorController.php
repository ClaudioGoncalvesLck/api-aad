<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Autor;
use Illuminate\Http\Request;

class AutorController extends Controller
{
 public function index()
 {
  return Autor::all();
 }

 public function store(Request $request)
 {
  Autor::create($request->all());
 }

 public function show($id)
 {
  return Autor::findorfail($id);
 }

 public function update(Request $request, $id)
 {
  $Autor = Autor::findorfail($id);
  $Autor->update($request->all());
 }

 public function destroy($id)
 {
  $Autor = Autor::findorfail($id);
  $Autor->delete();
 }

}
