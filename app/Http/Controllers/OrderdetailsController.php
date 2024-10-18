<?php

namespace App\Http\Controllers;

use App\Models\OrderDetails;
use Illuminate\Http\Request;

class OrderDetailsController extends Controller
{
    // Exibir todos os detalhes de pedidos
    public function index()
    {
        $orderDetails = OrderDetails::all();
        return response()->json($orderDetails);
    }

    // Exibir um detalhe de pedido específico
    public function show($id)
    {
        $orderDetail = OrderDetails::findOrFail($id);
        return response()->json($orderDetail);
    }

    // Criar um novo detalhe de pedido
    public function store(Request $request)
    {
        $request->validate([
            'id_order' => 'required|integer|exists:orders,id', // Assumindo que existe uma tabela de pedidos
            'id_book' => 'required|integer|exists:books,id',   // Assumindo que existe uma tabela de livros
        ]);

        $orderDetail = OrderDetails::create($request->all());
        return response()->json($orderDetail, 201);
    }

    // Atualizar um detalhe de pedido existente
    public function update(Request $request, $id)
    {
        $orderDetail = OrderDetails::findOrFail($id);

        $request->validate([
            'id_order' => 'sometimes|required|integer|exists:orders,id',
            'id_book' => 'sometimes|required|integer|exists:books,id',
        ]);

        $orderDetail->update($request->all());
        return response()->json($orderDetail);
    }

    // Remover um detalhe de pedido
    public function destroy($id)
    {
        $orderDetail = OrderDetails::findOrFail($id);
        $orderDetail->delete();
        return response()->json(null, 204);
    }
}
