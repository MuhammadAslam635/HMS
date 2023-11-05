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
        Schema::table('rooms', function (Blueprint $table) {
            $table->id();
            $table->string('room_no')->nullable();
            $table->string('name')->nullable();
            $table->integer('price')->default(0);
            $table->integer('capacity')->default(0);
            $table->tinyInteger('status')->default(0);
            $table->string('image')->nullable();
            $table->foreignId('ward_id')->constrained('wards')->onDelete('cascade')->onUpdate('cascade')->nullable();
            $table->foreignId('room_type_id')->constrained('room_types')->onDelete('cascade')->onUpdate('cascade')->nullable();
            $table->foreignId('created_by_id')->constrained('users')->onDelete('cascade')->onUpdate('cascade')->nullable();
            $table->foreignId('updated_by_id')->constrained('users')->onDelete('cascade')->onUpdate('cascade')->nullable();
            $table->timestamps();

        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rooms');
    }
};
