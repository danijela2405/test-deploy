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
        Schema::create('reactions', function (Blueprint $table) {
            $table->id();

            $table->boolean('vote');
            $table->string('reaction')->nullable();

            $table->foreignId('user_id')
            ->constrained()
            ->onDelete('cascade')
            ->on('users');
            
            $table->foreignId('post_id')
            ->nullable()
            ->onDelete('cascade')
            ->on('posts');
            
            $table->foreignId('comment_id')
            ->nullable()
            ->onDelete('cascade')
            ->on('comments');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reactions');
    }
};
