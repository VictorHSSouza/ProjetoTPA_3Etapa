<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the books.
     */
    public function index()
    {
        $books = Book::all();
        return view('books.index', compact('books'));
    }

    /**
     * Show the form for creating a new book.
     */
    public function create()
    {
        return view('books.create');
    }

    /**
     * Store a newly created book in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'autor' => 'required|string|max:255',
            'creation_date' => 'required|date',
            'category' => 'required|string|max:255',
            'indicative_rating' => 'required|integer|min:0|max:18',
        ]);

        Book::create($validatedData);

        return redirect()->route('books.index')->with('success', 'Book created successfully!');
    }

    /**
     * Display the specified book.
     */
    public function show(Book $book)
    {
        return view('books.show', compact('book'));
    }

    /**
     * Show the form for editing the specified book.
     */
    public function edit(Book $book)
    {
        return view('books.edit', compact('book'));
    }

    /**
     * Update the specified book in storage.
     */
    public function update(Request $request, Book $book)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'autor' => 'required|string|max:255',
            'creation_date' => 'required|date',
            'category' => 'required|string|max:255',
            'indicative_rating' => 'required|integer|min:0|max:18',
        ]);

        $book->update($validatedData);

        return redirect()->route('books.index')->with('success', 'Book updated successfully!');
    }

    /**
     * Remove the specified book from storage.
     */
    public function destroy(Book $book)
    {
        $book->delete();

        return redirect()->route('books.index')->with('success', 'Book deleted successfully!');
    }
}
