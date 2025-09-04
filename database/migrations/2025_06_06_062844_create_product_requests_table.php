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
        Schema::create('product_requests', function (Blueprint $table) {
            $table->id();
            $table->string('created_by_id')->nullable();
            $table->string('warehouse_id')->nullable();
            $table->string('brand_id')->nullable();
            $table->string('category_id')->nullable();
            $table->string('sub_category_id')->nullable();
            $table->string('product_id')->nullable();
            $table->string('code')->nullable();
            $table->string('name')->nullable();
            $table->string('slug')->nullable();
            $table->string('unit')->nullable();
            $table->string('qty')->nullable();
            $table->string('prescription_required')->default('No')->nullable();
            $table->string('mrp_price')->nullable();
            $table->string('sale_price')->nullable();
            $table->string('use_case')->nullable();
            $table->longText('description')->nullable();
            $table->string('status')->nullable();
            $table->text('status_remarks')->nullable();
            $table->string('deleted_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_requests');
    }
};
