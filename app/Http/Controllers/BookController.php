<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index() {
        $books = Book::orderBy('bookName')
            ->orderBy('bookName')->get();

        return response()->json([
            'book' => $books
        ]);
    }

    public function show(Book $books) {
        $books->load('books');
        return response()->json($books);
    }

    public function store(Request $request) {
        $request->validate([
            'bookName' => 'string|required',
            'author' => 'numeric|required',
            'date' => 'date|required',
        ]);

        $book = Book::create($request->all());

        return response()->json($book);
    }

    public function update(Book $book, Request $request) {
        $book->update($request->all());

        return response()->json($book);
    }

    public function destroy(Book $book) {
        $book->delete();
        return response()->json(['message'=>'book has been deleted.']);
    }
}
