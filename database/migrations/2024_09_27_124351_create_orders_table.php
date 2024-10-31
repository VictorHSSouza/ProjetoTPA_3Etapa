<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id(); // ID padrão
            $table->unsignedBigInteger('id_librarian'); // ID do bibliotecário
            $table->unsignedBigInteger('id_customer'); // ID do cliente
            $table->timestamps();
            
            // Chaves estrangeiras (caso existam)
            $table->foreign('id_librarian')->references('id')->on('librarians')->onDelete('cascade');
            $table->foreign('id_customer')->references('id')->on('customers')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('orders');
    }
};
