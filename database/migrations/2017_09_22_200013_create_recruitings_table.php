<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecruitingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recruitings', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('sector_id')->unsigned()->index();
            $table->string('organizationName');
            $table->string('contactName');
            $table->string('jobTitle');
            $table->string('email');
            $table->string('location');
            $table->bigInteger('phone');
            $table->string('salaryRange');
            $table->mediumText('basicInfo');
            $table->mediumText('moreInfo');
            $table->string('empType');
            $table->timestamps();
            $table->foreign('sector_id')->references('id')->on('sectors');
            $table->engine = 'InnoDB';

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recruitings');
    }
}
