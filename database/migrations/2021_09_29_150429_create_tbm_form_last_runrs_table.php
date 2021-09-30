<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbmFormLastRunrsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbm_form_last_runrs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('runner_id')->constrained('tbm_runners');
            $table->integer('total_run');
            $table->integer('win_run');
            $table->float('demo_rate');
            $table->integer('race_code');
            $table->string('lead');
            $table->dateTime('race_date');
            $table->string('race_place');
            $table->integer('bit_price');
            $table->string('race_status');
            $table->float('possible_bit');
            $table->string('currency');
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
        Schema::dropIfExists('tbm_form_last_runrs');
    }
}
