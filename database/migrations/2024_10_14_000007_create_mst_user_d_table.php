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
        Schema::create('mst_user_d', function (Blueprint $table) {
            $table->id('user_id');
            $table->string('first_name')->nullable();
            $table->string('middle_name')->nullable();
            $table->string('last_name')->nullable();
            $table->enum('gender', ['M', 'F'])->nullable();
            $table->date('birth_date')->nullable();
            $table->string('avatar')->nullable();
            $table->string('occupation')->nullable();
            $table->string('phone', 15)->nullable()->unique();
            $table->string('address')->nullable();

            /* Foreign key constraint */
            $table->foreignId('postal_code_id')->nullable()->constrained('mst_postal_codes');
            $table->foreignId('regency_id')->nullable()->constrained('mst_regencies');
            $table->foreignId('district_id')->nullable()->constrained('mst_districts');
            $table->foreignId('province_id')->nullable()->constrained('mst_provinces');
            $table->foreignId('country_id')->nullable()->constrained('mst_countries');
            $table->timestamps();

            /* Foreign key constraint */
            $table->foreign(columns: 'user_id')->references('id')->on('mst_users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mst_user_d');
    }
};
