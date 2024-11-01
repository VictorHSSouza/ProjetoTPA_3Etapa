<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLibrariansTable extends Migration
{
    /**
     * Execute the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('librarians', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('name');
            $table->string('email')->unique();
            $table->date('birth_date');
            $table->string('phone');
            $table->string('cpf')->unique();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Revert the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('librarians');
    }
}
