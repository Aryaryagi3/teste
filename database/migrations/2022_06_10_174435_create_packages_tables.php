<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->string('name', 200);
            $table->string('description', 500);
            $table->string('status', 50);
            $table->string('cep', 8);
            $table->string('street', 200);
            $table->string('number', 10);
            $table->string('complement', 200);
            $table->string('neighborhood', 200);
            $table->string('state', 200);
            $table->string('city', 200);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('packages');
    }
};
