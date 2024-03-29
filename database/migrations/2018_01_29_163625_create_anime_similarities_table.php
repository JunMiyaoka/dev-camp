<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnimeSimilaritiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anime_similarities', function($table){
            $table->unsignedInteger('anime_id');
            $table->unsignedInteger('related_anime_id');
            $table->float('similarity');
            $table->index(['anime_id', 'related_anime_id']);
            $table->unique(['anime_id', 'related_anime_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('anime_similarities');
    }
}
