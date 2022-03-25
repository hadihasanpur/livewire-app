<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('dep_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('gender');
            $table->year('birth_year');
            $table->string('title');
            $table->date('from_date');
            $table->string('mobile');
            $table->string('tell1');
            $table->string('tell2');
            $table->string('address');
            $table->timestamps();
            // $table->foreign('dep_id')
            // ->references('id')
            // ->on('departments')
            // ->onDelete('cascade');
            $table->foreign('dep_id')->references('id')->on('departments');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personals');
    }
}
