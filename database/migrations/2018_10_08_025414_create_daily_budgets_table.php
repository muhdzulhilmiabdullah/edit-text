<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDailyBudgetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daily_budgets', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date');
            $table->integer('food');
            $table->integer('transport');
            $table->integer('miscellaneous');
            $table->integer('total_expenses');
            $table->integer('total');
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
        Schema::dropIfExists('daily_budgets');
    }
}
