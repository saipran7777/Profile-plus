<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email');
            $table->string('Position');
            $table->string('SubDepartment');
            $table->string('Department');
            $table->string('Organisation');
            $table->string('Status');
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
        Schema::drop('pors');
    }
}
