<?php

use App\Models\User;
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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class); // author of the post

            $table->string('image')->nullable(); // image of the post
            $table->string('title');    // title of the post
            $table->string('slug')->unique(); // slug of the post
            $table->text('body'); // body of the post

            $table->timestamp('published_at')->nullable(); // date when the post is published
            $table->boolean('featured')->default(false); // whether the post is featured

            $table->softDeletes(); // soft deletes the post when it is deleted

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
