<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateQuestionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        

        Schema::table('questions', function (Blueprint $table) {
            $table->integer('subject_id')->unsigned()->index()->nullable();            
            $table->foreign('subject_id')->references('id')->on('subjects');
            $table->integer('questiontype_id')->unsigned()->index()->nullable();            
            $table->foreign('questiontype_id')->references('id')->on('questiontypes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
