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
        Schema::create('mst_addresses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('mst_users')->onDelete('cascade');
            $table->foreignId('country_id')->nullable()->constrained('mst_countries');
            $table->foreignId('province_id')->nullable()->constrained('mst_provinces');
            $table->foreignId('district_id')->nullable()->constrained('mst_districts');
            $table->foreignId('regency_id')->nullable()->constrained('mst_regencies');
            $table->foreignId('postal_code_id')->nullable()->constrained('mst_postal_codes');
            $table->string('street_address')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mst_addresses');
    }
};
