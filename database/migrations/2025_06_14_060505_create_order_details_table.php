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
        Schema::create('order_details', function (Blueprint $table) {
            $table->id();
            $table->string('created_by_id')->nullable();
            $table->string('created_by_role')->nullable();
            $table->string('customer_id')->nullable();
            $table->string('order_id')->nullable();
            $table->string('product_id')->nullable();
            $table->string('category_id')->nullable();
            $table->string('sub_category_id')->nullable();
            $table->string('brand_id')->nullable();
            $table->string('price')->nullable()->default(0);
            $table->string('qty')->nullable()->default(1);
            $table->string('total_amount')->nullable()->default(0);
            $table->string('tax_rate')->nullable()->default(0);
            $table->string('tax_amount')->nullable()->default(0);
            $table->string('deleted_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_details');
    }
};
