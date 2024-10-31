<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Customer;
use App\Models\Book;
use App\Models\OrderDetails;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    // Exibir todos os pedidos
    public function index()
    {
        $orders = Order::all();
        return view('orders.index', compact('orders'));
    }

    // Exibir formulário para criação de novo pedido
    public function create()
    {
        $customers = Customer::all();
        $books = Book::all();

        return view('orders.create', compact('customers', 'books'));
    }

    // Salvar novo pedido
    public function store(Request $request)
    { 
        $request->validate([
            //'id_librarian' => 'required|exists:librarians,id',
            'id_customer' => 'required|exists:customers,id',
            'id_book' => 'exists:books,id',
        ]);

        $order = Order::create([
            'id_customer' => $request->input('id_customer'),
            'id_librarian' => $request->input('id_librarian'), // ID do bibliotecário autenticado
        ]);

        //foreach ($request->input('id_book') as $id_book) {
            OrderDetails::create([
                'id_order' => $order->id,
                'id_book' => $request->input('id_book'),
            ]);
        //}

        return redirect()->route('orders.index')->with('success', 'Pedido criado com sucesso.');
    }

    // Exibir detalhes de um pedido específico
    public function show($id)
    {
        $order = Order::with(['orderDetails.book', 'customer'])->findOrFail($id);

        return view('orders.show', compact('order'));
    }

    // Exibir formulário para edição de um pedido
    public function edit($id)
    {
        $order = Order::with(['orderDetails.book', 'customer'])->findOrFail($id);
        $customers = Customer::all();
        $books = Book::all();

        return view('orders.edit', compact('order', 'customers', 'books'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            //'id_librarian' => 'required|exists:librarians,id',
            'id_customer' => 'required|exists:customers,id',
            'id_book' => 'required|exists:books,id',
        ]);

        $order = Order::findOrFail($id);
        $order->update([
            'id_customer' => $request->input('id_customer'),
            'id_librarian' => $request->input('id_librarian'), // ID do bibliotecário autenticado
            'date_time' => now(),
        ]);

        // Remover detalhes antigos e adicionar novos
        $order->orderDetails()->delete(); // Remove detalhes antigos

        foreach ($request->input('id_book') as $id_book) {
            OrderDetails::create([
                'id_order' => $order->id,
                'id_book' => $id_book,
            ]);
        }

        return redirect()->route('orders.index')->with('success', 'Pedido atualizado com sucesso.');
    }

    // Excluir um pedido
    public function destroy($id)
    {
        $order = Order::findOrFail($id);
        $order->orderDetails()->delete(); // Remove os detalhes do pedido
        $order->delete(); // Remove o pedido

        return redirect()->route('orders.index')->with('success', 'Pedido excluído com sucesso.');
    }

}
