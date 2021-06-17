<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventMediasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_medias', function (Blueprint $table) {
           
            $table->unsignedBigInteger('event_id');
            $table->index('event_id');

            $table->foreign('event_id')
                ->references('id')
                ->on('events')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->unsignedBigInteger('media_id');
            $table->index('media_id');

            $table->foreign('media_id')
                ->references('id')
                ->on('medias')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->primary(['event_id', 'media_id']);
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
        Schema::dropIfExists('event_medias');
    }
}
