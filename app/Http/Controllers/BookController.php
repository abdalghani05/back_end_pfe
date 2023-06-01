<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::with('categorie','author')->get();
        return response()->json($books);

    }
    public function store(Request $request)
    {
        return response()->json(Book::create($request->all()));


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
        $contact = Book::with('categorie','author')->find($id);
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

        $book = Book::find($id);
        $book->update($request->all());
        return response()->json('Book updated');
    }

    public function destroy($id)
    {
        $book = Book::findOrFail($id);
        $book->delete();
        return redirect()->route('authors.index')->with('success', 'Author deleted!');
    }
}
