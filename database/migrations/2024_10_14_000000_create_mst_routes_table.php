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
        Schema::create('mst_routes', function (Blueprint $table) {
            $table->id();
            $table->string('uri');
            $table->string('name');
            $table->string('method');
            $table->string('middleware')->nullable();
            $table->string('component');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mst_routes');
    }
};
