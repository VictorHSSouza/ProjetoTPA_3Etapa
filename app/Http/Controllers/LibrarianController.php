<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use App\Models\Librarian;
use App\Models\User;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class LibrarianController extends Controller
{
    public function index()
    {
        $librarians = Librarian::all();
        return view('librarians.index', compact('librarians'));
    }

    public function create()
    {
        return view('librarians.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'birth_date' => 'required|date',
            'phone' => 'required|string|max:255',
            'cpf' => 'required|string|max:255|unique:librarians',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
        ]);

        Librarian::create([
            'user_id' => $user->id,
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'birth_date' => $request->input('birth_date'),
            'phone' => $request->input('phone'),
            'cpf' => $request->input('cpf'),
        ]);

        return redirect()->route('librarians.index')->with('success', 'Bibliotecário criado com sucesso.');
    }

    public function show(Librarian $librarian)
    {
        return view('librarians.show', compact('librarian'));
    }

    public function edit(Librarian $librarian)
    {
        return view('librarians.edit', compact('librarian'));
    }

    public function update(Request $request, Librarian $librarian)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $librarian->id,
            'birth_date' => 'required|date',
            'phone' => 'required|string|max:255',
            'cpf' => 'required|string|max:255|unique:librarians',
        ]);

        $librarian->update($request->all());
        return redirect()->route('librarians.index')->with('success', 'Bibliotecário atualizado com sucesso.');
    }

    public function destroy(Librarian $librarian)
    {
        $librarian->delete();
        return redirect()->route('librarians.index')->with('success', 'Bibliotecário excluído com sucesso.');
    }
}
