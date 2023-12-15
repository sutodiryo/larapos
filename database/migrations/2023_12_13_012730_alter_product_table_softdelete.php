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
            $table->json('images')->after('category_id')->nullable();
            $table->longText('description')->after('images')->nullable();
            $table->string('product_code')->after('description')->nullable();
            $table->string('bar_code')->after('product_code')->nullable();

            $table->integer('purchase_price')->after('bar_code')->default('0');
            $table->integer('selling_price')->after('purchase_price')->default('0');

            $table->integer('qty')->after('selling_price')->default('0');
            $table->integer('qty_sold')->after('qty')->default('0');
            $table->integer('qty_available')->after('qty_sold')->default('0');
            $table->integer('qty_defective')->after('qty_available')->default('0');

            $table->tinyInteger('status')->after('qty_defective')->default('0');
            $table->softDeletes()->after('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
