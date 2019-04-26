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
    public function store(Request $request)
    {
        //dd($request->all()); //dd mean to check the variable
        $book = new Book; //Book is model name
                          //New mean 
        $book->title = $request -> input('title');
        $book->description = $request -> input('description');
        $book->save();
    }
}
