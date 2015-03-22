<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTicketProgressTable extends Migration {

	/**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('ticket_progress', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ticket_id');
            $table->integer('assigned_user_id');
            $table->text('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::drop('ticket_progress');
    }

}
