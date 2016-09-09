<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('category');
            $table->string('start_date');
            $table->string('end_date');
            $table->string('client');
            $table->longText('description');
            $table->string('team');
            $table->string('host_url');
            $table->string('host_user');
            $table->string('host_pass');
            $table->string('ftp_url');
            $table->string('ftp_user');
            $table->string('ftp_pass');
            $table->string('state');
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
        Schema::drop('projects');
    }
}
