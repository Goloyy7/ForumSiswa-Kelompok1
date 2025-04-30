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
        Schema::create('comment', function (Blueprint $table) {
            $table->id('comment_id');
            $table->unsignedBigInteger('post_id');
            $table->unsignedBigInteger('student_id');
            $table->text('content');
            $table->timestamps();
    
            $table->foreign('post_id')->references('post_id')->on('posts')->onDelete('cascade');
            $table->foreign('student_id')->references('student_id')->on('students')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comment');
    }
};
