<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = ['name','autor', 'creation_date','category','indicative_rating'];
           
    public function orders()
    {
        return $this->belongsToMany(Order::class, 'orderdetails', 'id_book', 'id_order');
    }
}
