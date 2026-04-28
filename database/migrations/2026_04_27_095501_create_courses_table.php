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
            $table->decimal('price', 10, 2)->default(0);
            $table->integer('discount_percentage')->default(0);

            $table->string('banner')->nullable();
            $table->text('description')->nullable();

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
            $table->foreignId('created_by')
                ->nullable()
                ->constrained('users')
                ->nullOnDelete();

            $table->foreignId('updated_by')
                ->nullable()
                ->constrained('users')
                ->nullOnDelete();

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
