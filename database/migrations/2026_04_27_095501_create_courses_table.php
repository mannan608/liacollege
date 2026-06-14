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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();

            $table->string('title');
            $table->decimal('price', 10, 2)->nullable();
            $table->integer('discount_percentage')->nullable();

            $table->string('banner')->nullable();
            $table->text('description')->nullable();
            $table->string('course_material')->nullable();

            // Category relation
            $table->foreignId('category_id')
                ->nullable()
                ->constrained('categories')
                ->nullOnDelete();

            // Parent course (optional)
            $table->foreignId('parent_id')
                ->nullable()
                ->constrained('courses')
                ->nullOnDelete();

            // User tracking
           $table->unsignedBigInteger('created_by')->nullable();
            $table->unsignedBigInteger('updated_by')->nullable();

            $table->timestamps();
        });
    }

    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
