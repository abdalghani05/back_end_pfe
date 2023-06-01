<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorie;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Categorie::all();
        return response()->json($categories);

    }
    public function store(Request $request)
    {
        return response()->json(Categorie::create($request->all()));
    }

    public function show($id)
    {
        $contact = Categorie::find($id);
        return response()->json($contact);
    }

    public function update(Request $request,$id)
    {
        /*   $request ->validate([
               'nom' =>'require' ,
               'prenom'=>'require' ,
               'description'=>'require'
           ]);

           $author->fill($request->post())->update();
           return response()->json(['message'=>'Author updated!']);*/

        $categorie = Categorie::find($id);
        $categorie->update($request->all());
        return response()->json('Categorie updated');
    }

    public function destroy($id)
    {
        $categorie = Categorie::findOrFail($id);
        $categorie->delete();
        return response()->json('Categorie deleted');
    }
}
