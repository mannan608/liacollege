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
            $table->boolean('care_role')->default(false);

            $table->json('sector')->nullable();
            $table->string('experience_years')->nullable();
            $table->boolean('communication')->default(false);

            $table->json('documents')->nullable();
            $table->boolean('evidence_ready')->default(false);
            $table->boolean('fast_track')->default(false);

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
