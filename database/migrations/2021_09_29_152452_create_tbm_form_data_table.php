<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbmFormDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbm_form_data', function (Blueprint $table) {
            $table->id();
            $table->foreignId('runner_id')->constrained('tbm_runners');
            $table->string('runner_name');
            $table->integer('age');
            $table->char('sex');
            $table->char('colour');
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
        Schema::dropIfExists('tbm_form_data');
    }
}
