<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('books.index', compact('books'));
    }

    public function create()
    {
        return view('books.create');
    }

    public function store( Request $request )
    {
        //dd($request->all()); //dd mean to check the variable
        $book = new Book;       //Book is model name
                                //New mean create a "new table"
        $book->title = $request -> input('title');
        $book->description = $request -> input('description');
        $book->save();
        $books = Book::all();
        return view('books.index', compact('books') );
    }

    public function show($id)
    {   
        //dd($id);

        $book = Book::find($id);
        return view('books.show', compact('book'));
    }

    public function edit($id)
    {   
        //dd($id);

        $book = Book::find($id);
        return view('books.edit', compact('book'));
    }

    public function update($id, Request $request )
    {
        $book = Book::find($id);
        $book->title = $request->input('title');
        $book->description = $request->input('description');
        $book->save();
        $books = Book::all();
        return view('books.index', compact('books'));
    }

    public function delete( Request $request )
    {
        $book = Book::destroy($request->id);
        $books = Book::all();
        return view('books.index', compact('books') );
    }
}
