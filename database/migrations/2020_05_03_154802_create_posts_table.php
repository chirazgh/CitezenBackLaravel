<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\region;
class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post', function (Blueprint $table) {
            $table->collation = 'utf8_general_ci';
            $table->charset = 'utf8';
            $table->engine= 'InnoDB';
            $table->increments('id');
            $table->string('titre');
            $table->string('imageP');
            $table->string('description');
            $table->string('signe');
            $table->string('valide');
            $table->integer('id_region')->unsigned();

            $table->foreign('id_region')->references('id')->on('region')->onDelete('cascade')->onUpdate('cascade');

            $table->timestamps();
           // $table->foreign('id_region')->references('id')->on('region')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('post');
    }
}
