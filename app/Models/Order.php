<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['id_librarian', 'id_customer'];

    public function orderDetails()
    {
        return $this->hasMany(OrderDetails::class, 'id_order');
    }

    public function books()
    {
        return $this->hasManyThrough(Book::class, OrderDetails::class, 'id_order', 'id', 'id', 'id_book');
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'id_customer');
    }


}
