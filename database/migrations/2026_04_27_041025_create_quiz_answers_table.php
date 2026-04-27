<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('quiz_answers', function (Blueprint $table) {
            $table->id();
            $table->string('session_id', 100);
            $table->string('question_key', 100);
            $table->text('question_text');
            $table->string('answer_value');
            $table->string('answer_label');
            $table->unsignedTinyInteger('step');
            $table->unsignedTinyInteger('total_steps');
            $table->ipAddress('ip_address')->nullable();
            $table->text('user_agent')->nullable();
            $table->timestamps();

            $table->unique(['session_id', 'question_key']);
            $table->index('question_key');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('quiz_answers');
    }
};
