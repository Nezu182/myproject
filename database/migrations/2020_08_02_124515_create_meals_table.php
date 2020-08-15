<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMealsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('user_id');
            $table->string('meal_date');
            $table->string('meal_time');
            $table->decimal('kcal', 4, 1);
            $table->decimal('tansuikabutu', 3, 1);
            $table->decimal('sisitu', 3, 1);
            $table->decimal('tanpakusitu', 3, 1);
            $table->decimal('tousitu', 3, 1);
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
        Schema::dropIfExists('meals');
    }
}
