<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExerciseInstancePlanDayTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exercise_instance_plan_day', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('exercise_instance_id')->unsigned()->comment = 'id from exercise_instances';
            $table->integer('plan_day_id')->unsigned()->comment = 'id from exercise_instances';
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('exercise_instance_plan_day');
    }
}
