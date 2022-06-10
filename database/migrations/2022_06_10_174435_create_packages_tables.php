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
        Schema::create('packages_tables', function (Blueprint $table) {
            $table->id();
            $table->string('name', 200);
            $table->string('description', 500);
            $table->integer('cep');
            $table->string('street', 200);
            $table->integer('number');
            $table->string('neighbourhood', 200);
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
        Schema::dropIfExists('packages_tables');
    }
};
