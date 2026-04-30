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
        Schema::create('rpl_leads', function (Blueprint $table) {
            $table->id();

            $table->string('age')->nullable();
            $table->string('employment_status')->nullable();

            $table->enum('care_role', ['yes', 'no'])->default('no');

            $table->json('sector')->nullable();
            $table->string('experience_years')->nullable();

            $table->enum('communication', ['yes', 'no'])->default('no');

            $table->json('documents')->nullable();

            $table->enum('evidence_ready', ['yes', 'no'])->default('no');
            $table->enum('fast_track', ['yes', 'no'])->default('no');

            $table->string('name');
            $table->string('phone')->unique();
            $table->string('email')->nullable();

            $table->string('course');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rpl_leads');
    }
};
