<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('file')->nullable();
            $table->string('slug');
            $table->string('location')->nullable();
            $table->foreignId('user_id')->nullable();

            $table->unsignedBigInteger('posted_by');
            $table->index('posted_by');

            $table->foreign('posted_by')
                ->references('id')
                ->on('users')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            
            $table->unsignedBigInteger('parent_id')
            ->nullable();
            $table->index('parent_id');

            $table->foreign('parent_id')
                ->references('id')
                ->on('posts')
                ->onUpdate('cascade')
                ->onDelete('cascade')
                ->nullable();

            $table->string('type');
            
            $table->string('title');

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
