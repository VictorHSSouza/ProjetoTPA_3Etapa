<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    protected $fillable = ['id_librarian', 'id_customer', 'date_time'];

      public function index()
      {
          $orders = Order::all();
          return view('orders.index', compact('orders'));
      }
  
    public function store(Request $request)
    {
        $validated = $request->validate([
            'id_librarian' => 'required|exists:librarians,id',
            'id_customer' => 'required|exists:customers,id',
            'date_time' => 'required|date',
        ]);

        $order = Order::create($validated);
        return response()->json($order, 201);
    }

    public function show($id)
    {
        $order = Order::findOrFail($id);
        return response()->json($order);
    }

    public function update(Request $request, $id)
    {
        $order = Order::findOrFail($id);
        
        $validated = $request->validate([
            'id_librarian' => 'sometimes|required|exists:librarians,id',
            'id_customer' => 'sometimes|required|exists:customers,id',
            'date_time' => 'sometimes|required|date',
        ]);

        $order->update($validated);
        return response()->json($order);
    }

    public function destroy($id)
    {
        $order = Order::findOrFail($id);
        $order->delete();
        return response()->json(null, 204);
    }


    public function create()
    {
        // Retorna a view para criar um novo pedido
        return view('orders.create');
    }
}
