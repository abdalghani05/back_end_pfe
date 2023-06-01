<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use App\Models\Author;

class AuthorsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $author = Author::all('id','nom','prenom','description','photo');
        return response()->json($author);

    }
    public function store(Request $request)
    {
        return response()->json(Author::create($request->all()));


      /*  $author = new Author([
            'nom' => $request->input('nom'),
            'prenom' => $request->input('prenom'),
            'description' => $request->input('description'),
        ]);
        $author->save();
        return response()->json('Author created!');*/
    }

    public function show($id)
    {
        $contact = Author::find($id);
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

        $author = Author::find($id);
        $author->update($request->all());
        return response()->json('Author updated');
    }

    public function destroy($id)
    {
        $author = Author::findOrFail($id);
        $author->delete();
        return redirect()->route('authors.index')->with('success', 'Author deleted!');
    }

}
