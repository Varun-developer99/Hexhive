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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('created_by_id')->nullable();
            $table->string('created_by_role')->nullable();
            $table->string('customer_id')->nullable();
            $table->string('order_no')->nullable();
            $table->string('f_name')->nullable();
            $table->string('l_name')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('country')->nullable();
            $table->string('state')->nullable();
            $table->string('city')->nullable();
            $table->string('address_1')->nullable();
            $table->string('address_2')->nullable();
            $table->string('pincode')->nullable();
            $table->string('note')->nullable();
            $table->string('order_status')->nullable()->default('Pending');
            $table->string('payment_method')->nullable();
            $table->string('payment_status')->nullable()->default('Pending');
            $table->string('sub_total')->nullable()->default(0);
            $table->string('shipping_cost')->nullable()->default(0);
            $table->string('total_tax_amount')->nullable()->default(0);
            $table->string('discount')->nullable()->default(0);
            $table->string('grand_total')->nullable()->default(0);
            $table->string('deleted_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
