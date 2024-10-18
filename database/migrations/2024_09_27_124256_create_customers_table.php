<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id(); // Campo ID auto-increment
            $table->string('name'); // VARCHAR para o nome
            $table->string('email')->unique(); // VARCHAR para o email (único)
            $table->date('birth_date'); // DATE para a data de nascimento
            $table->string('address')->nullable(); // VARCHAR para o endereço (opcional)
            $table->string('phone')->nullable(); // VARCHAR para o telefone (opcional)
            $table->timestamps(); // Campos created_at e updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('customers');
    }
};

