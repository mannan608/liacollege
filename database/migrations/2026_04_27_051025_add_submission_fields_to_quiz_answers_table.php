<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('quiz_answers', function (Blueprint $table) {
            $table->json('answers')->nullable()->after('answer_label');
            $table->string('full_name', 120)->nullable()->after('answers');
            $table->string('phone', 40)->nullable()->after('full_name');
            $table->string('email', 150)->nullable()->after('phone');
            $table->string('country', 100)->nullable()->after('email');
            $table->text('message')->nullable()->after('country');
            $table->timestamp('completed_at')->nullable()->after('total_steps');
        });
    }

    public function down(): void
    {
        Schema::table('quiz_answers', function (Blueprint $table) {
            $table->dropColumn([
                'answers',
                'full_name',
                'phone',
                'email',
                'country',
                'message',
                'completed_at',
            ]);
        });
    }
};
