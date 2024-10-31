<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetails extends Model
{
    use HasFactory;

    protected $fillable = ['id_order', 'id_book'];

    protected $table = 'orderdetails';

    public function book()
    {
        return $this->belongsTo(Book::class, 'id_book');
    }

}
