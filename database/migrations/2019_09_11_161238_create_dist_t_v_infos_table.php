<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDistTVInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dist_t_v_infos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('user_id')->index();
            $table->unsignedInteger('dish_tv_type_id')->index();
            $table->string('phone_number')->nullable();
            $table->string('monthly_paid')->nullable();
            $table->string('plan')->nullable();
            $table->string('model')->nullable();
            $table->string('sr_no')->nullable();
            $table->string('card_no')->nullable();
            $table->string('chip_id')->nullable();
            $table->string('vsc_no')->nullable();
            $table->string('smart_card_no')->nullable();
            $table->string('cdsn_no')->nullable();
            $table->string('image_name')->nullable();
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
        Schema::dropIfExists('dist_t_v_infos');
    }
}
