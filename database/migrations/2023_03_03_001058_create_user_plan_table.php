<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserPlanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_plan', function (Blueprint $table) {
            $table->bigInteger('user_id')->unsigned();

            $table->bigInteger('plan_id')->unsigned();
            $table->text('meta')->nullable();

            $table->foreign('user_id')->references('id')->on('users')

                ->onDelete('cascade');

            $table->foreign('plan_id')->references('id')->on('plans')

                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_plan');
    }
}
