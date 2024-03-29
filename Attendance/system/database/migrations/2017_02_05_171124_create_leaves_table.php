<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLeavesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leaves',function(Blueprint $table){
            $table->increments('id');
            $table->integer('user_id');
            $table->string('reason');
            $table->date('start_date');
            $table->date('end_date');
            $table->string('status');
            $table->string('validated_by');
            $table->integer('category_id');
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
        Schema::drop('leaves');
    }
}
