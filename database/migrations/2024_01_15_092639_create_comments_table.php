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
        Schema::create('comments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('blog_id');
            $table->unsignedBigInteger('user_id')->nullable();;
            $table->text('comment')->nullable();
            $table->string('ratting')->nullable();
            $table->enum('status',['Draft','Publish','Reject'])->default('Draft');
            $table->bigInteger('view')->default(0);
            $table->tinyInteger('seen')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};
