<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    // Exibir todos os clientes
    public function index()
    {
        $customers = Customer::all();
        return view('customers.index', compact('customers'));
    }


    public function create()
    {
        return view('customers.create');
    }

    // Exibir um cliente específico
    public function show($id)
    {
        $customer = Customer::findOrFail($id);
        return view('customers.show', compact('customer'));
    }


    // Criar um novo cliente
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:customers',
            'birth_date' => 'required|date',
            'address' => 'nullable|string|max:255',
            'phone' => 'nullable|string|max:20',
        ]);

        Customer::create($request->all());
        return redirect()->route('customers.index')->with('success', 'Cliente criado com sucesso!');
    }

    public function edit($id)
    {
        $customer = Customer::findOrFail($id);
        return view('customers.edit', compact('customer'));
    }


    // Atualizar um cliente existente
    public function update(Request $request, $id)
    {
        $customer = Customer::findOrFail($id);

        $request->validate([
            'name' => 'sometimes|required|string|max:255',
            'email' => 'sometimes|required|string|email|max:255|unique:customers,email,' . $customer->id,
            'birth_date' => 'sometimes|required|date',
            'address' => 'nullable|string|max:255',
            'phone' => 'nullable|string|max:20',
        ]);

        $customer->update($request->all());
        return redirect()->route('customers.show', $customer->id)->with('success', 'Cliente atualizado com sucesso!');
    }


    // Remover um cliente
    public function destroy($id)
    {
        $customer = Customer::findOrFail($id);
        $customer->delete();
        return redirect()->route('customers.index')->with('success', 'Cliente excluído com sucesso!');
    }

    public function ViewCustomers()
    {
        $customers = Customer::all();

        return view('orders.create', compact('customer'));
    }
}
