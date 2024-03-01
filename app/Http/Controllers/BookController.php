<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index(){
    $books = Book::all();  
    return view('books.index', ['books'=>$books]);     
    }

    public function create(){
        return view('books.create');
    }
    public function store(Request $request){
        $data = $request->validate([
            'name' => 'required',
            'qty' => 'required|numeric',
            'price' => 'required|decimal:0,2',
            'description' => 'required',
        ]);

        $newBook = Book::create($data);

        return redirect(route('book.create'));
    }

    public function edit(Book $book){
                return view('books.edit', ['book' => $book]);
    }

    public function update(Book $book, Request $request){
        $data = $request->validate([
            'name' => 'required',
            'qty' => 'required|numeric',    
            'price' => 'required|decimal:0,2',
            'description' => 'required',
        ]);

        $book->update($data);

        return redirect(route('books.index'))->with('success', 'Book updated successfully');
    }

    public function destroy(Book $book){
        $book->delete();
        return redirect(route('books.index'))->with('success', 'Book deleted successfully');

    }
}
