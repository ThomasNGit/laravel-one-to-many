<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('movies', function (Blueprint $table) {
            $table -> bigInteger('actor_id') -> unsigned() -> index();
            $table -> foreign('actor_id', 'movies_actors')
                   -> references('id')
                   -> on('actors');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('movies', function (Blueprint $table) {
              $table -> dropForeign('movies_actors');
              $table -> dropColumn('actor_id');
        });
    }
}
