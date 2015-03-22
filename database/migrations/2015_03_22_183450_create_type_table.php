<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTypeTable extends Migration {

	/**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('type', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ticket_id');
            $table->string('name');
            $table->text('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::drop('type');
    }

}
