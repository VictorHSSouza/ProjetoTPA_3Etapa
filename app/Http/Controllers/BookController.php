<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    // List all books
    public function index()
    {
        $books = Book::all();
        return view('books.index', compact('books'));
    }

    public function create()
    {
        $books = Book::all();
        return view('books.create', compact('books'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'sometimes|required|string|max:255',
            'autor' => 'sometimes|required|string|max:255',
            'creation_date' => 'sometimes|required|date',
            'category' => 'sometimes|required|string|max:255',
            'indicative_rating' => 'sometimes|required|numeric|min:0|max:5',
        ]);

        Book::create($request->all());

        return redirect()->route('books.index')
            ->with('success', 'Livro criado com sucesso.');
    }

    // Show a specific book
    public function show($id)
    {
        $book = Book::findOrFail($id);
        return response()->json($book);
    }

    // Update an existing book
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'sometimes|required|string|max:255',
            'autor' => 'sometimes|required|string|max:255',
            'creation_date' => 'sometimes|required|date',
            'category' => 'sometimes|required|string|max:255',
            'indicative_rating' => 'sometimes|required|numeric|min:0|max:5',
        ]);

        $book = Book::findOrFail($id);
        $book->update($request->all());
        return response()->json($book);
    }

    // Delete a book
    public function destroy($id)
    {
        $book = Book::findOrFail($id);
        $book->delete();
        return response()->json(null, 204);
    }
}
