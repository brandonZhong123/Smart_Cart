<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up() {

        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->string('country');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('address');
            $table->string('apartment')->nullable();
            $table->string('city');
            $table->string('postal_code');
            $table->string('phone')->nullable();
            $table->decimal('subtotal', 8, 2);
            $table->decimal('shipping', 8, 2)->default(5.00);
            $table->decimal('sales_tax', 8, 2);
            $table->decimal('total', 8, 2);
            $table->json('items')->default(json_encode([])); // Set default value for 'items'
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
