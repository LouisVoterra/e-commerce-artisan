<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('name', 45)->nullable();
            $table->string('description', 150)->nullable();
            $table->integer('price')->nullable();
            $table->integer('stock')->nullable();
            $table->string('image', 500)->nullable();
            $table->integer('categories_id')->index('fk_products_categories1_idx');
            $table->integer('tokos_id_toko')->index('fk_products_tokos1_idx');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
