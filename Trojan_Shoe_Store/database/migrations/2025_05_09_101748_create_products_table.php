<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration {
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->string('id', 4)->primary();
            $table->string('name');
            $table->integer('quantity');
            $table->string('size');
            $table->integer('price'); // <-- Added price field
            $table->string('loc')->nullable(); // For image path
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('products');
    }
}
