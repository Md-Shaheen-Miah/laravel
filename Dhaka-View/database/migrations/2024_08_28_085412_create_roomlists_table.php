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
        Schema::create('roomlists', function (Blueprint $table) {
            $table->id();
            $table->string('room_number', 10);
            $table->string('room_type', 50);
            $table->string('bed_type', 50)->nullable();
            $table->decimal('price', 10, 2);
            $table->boolean('availability_status')->default(true);
            $table->text('description')->nullable();
            $table->timestamps();  // This will automatically create 'created_at' and 'updated_at' columns
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('roomlists');
    }
};
