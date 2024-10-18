<?php

namespace App\Http\Controllers;

use App\Models\Librarian;
use Illuminate\Http\Request;

class LibrarianController extends Controller
{
    // Exibir todos os bibliotecários
    public function index()
    {
        $librarians = Librarian::all();
        return response()->json($librarians);
    }

    // Exibir um bibliotecário específico
    public function show($id)
    {
        $librarian = Librarian::findOrFail($id);
        return response()->json($librarian);
    }

    // Criar um novo bibliotecário
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:librarians',
            'phone' => 'nullable|string|max:20',
            'registration' => 'required|string|max:100|unique:librarians',
        ]);

        $librarian = Librarian::create($request->all());
        return response()->json($librarian, 201);
    }

    // Atualizar um bibliotecário existente
    public function update(Request $request, $id)
    {
        $librarian = Librarian::findOrFail($id);

        $request->validate([
            'name' => 'sometimes|required|string|max:255',
            'email' => 'sometimes|required|string|email|max:255|unique:librarians,email,' . $librarian->id,
            'phone' => 'nullable|string|max:20',
            'registration' => 'sometimes|required|string|max:100|unique:librarians,registration,' . $librarian->id,
        ]);

        $librarian->update($request->all());
        return response()->json($librarian);
    }

    // Remover um bibliotecário
    public function destroy($id)
    {
        $librarian = Librarian::findOrFail($id);
        $librarian->delete();
        return response()->json(null, 204);
    }
}
