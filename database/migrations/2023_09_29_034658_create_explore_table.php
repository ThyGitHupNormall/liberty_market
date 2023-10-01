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
        Schema::create('explore', function (Blueprint $table) {
            $table->id();
            $table->string('label')->nullable;
            $table->string('title')->nullable;
            $table->string('descriptions')->nullable;
            $table->string('img')->nullable;
            $table->string('bg_img')->nullable;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('explore');
    }
};
