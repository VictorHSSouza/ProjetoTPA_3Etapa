<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    // Exibe a lista de livros
    public function index()
    {
        $books = Book::all();
        return view('books.index', compact('books'));
    }

    // Exibe o formulário para criar um novo livro
    public function create()
    {
        return view('books.create');
    }

    // Armazena um novo livro
    public function store(Request $request)
    {
        /*$request->validate([
            'name' => 'required|string|max:255',
            'autor' => 'required|string|max:255',
            'creation_date' => 'required|date',
            'category' => 'required|string|max:255',
            'indicative_rating' => 'required|integer|min:1|max:5',
        ]);*/

        Book::create($request->all());

        return redirect()->route('books.index')->with('success', 'Livro criado com sucesso.');
    }

    // Exibe o formulário para editar um livro existente
    public function edit(Book $book)
    {
        return view('books.edit', compact('book'));
    }

    // Atualiza um livro existente
    public function update(Request $request, Book $book)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'autor' => 'required|string|max:255',
            'creation_date' => 'required|date',
            'category' => 'required|string|max:255',
            'indicative_rating' => 'required|integer|min:1|max:5',
        ]);

        $book->update($request->all());

        return redirect()->route('books.index')->with('success', 'Livro atualizado com sucesso.');
    }

    // Remove um livro existente
    public function destroy(Book $book)
    {
        $book->delete();
        return redirect()->route('books.index')->with('success', 'Livro excluído com sucesso.');
    }
}
