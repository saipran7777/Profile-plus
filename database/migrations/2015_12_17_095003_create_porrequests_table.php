<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePorrequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('porrequests', function (Blueprint $table) {
            $table->increments('id');
            $table->string('RequestEmail');
            $table->string('RequestPosition');
            $table->string('ApproverPosition');
            $table->string('SubDepartment');
            $table->string('Department');
            $table->string('Organisation');
            $table->string('ApproverEmail');
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
        Schema::drop('porrequests');
    }
}
