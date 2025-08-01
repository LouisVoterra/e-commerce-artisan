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
        Schema::table('products', function (Blueprint $table) {
            $table->foreign(['categories_id'], 'fk_products_categories1')->references(['id'])->on('categories')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['tokos_id_toko'], 'fk_products_tokos1')->references(['id_toko'])->on('tokos')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropForeign('fk_products_categories1');
            $table->dropForeign('fk_products_tokos1');
        });
    }
};
