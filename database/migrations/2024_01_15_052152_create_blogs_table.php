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
        Schema::create('blogs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('blog_category_id')->nullable();
            $table->string('title', 350)->nullable();
            $table->string('slug', 350)->unique();
            $table->string('short_description')->nullable();
            $table->string('keyword', 500)->nullable();
            $table->string('photo')->nullable();
            $table->string('meta_title')->nullable();
            $table->string('meta_description', 160)->nullable();
            $table->text('long_description')->nullable();
            $table->mediumText('schema_info')->nullable();
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
        Schema::dropIfExists('blogs');
    }
};
