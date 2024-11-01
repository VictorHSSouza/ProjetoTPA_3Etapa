<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Book;
use App\Models\Order;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $totalCustomers = Customer::count();
        $totalBooks = Book::count();
        $totalOrders = Order::count();
        $recentOrders = Order::with(['customer', 'books'])->latest()->take(5)->get();

        return view('dashboard', compact('totalCustomers', 'totalBooks', 'totalOrders', 'recentOrders'));
    }


}
