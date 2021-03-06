<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKiraBudgetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kira_budgets', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('saving');
            $table->integer('salarymonth');
            $table->text('month');
            $table->string('bank');
            $table->string('month_working');
            $table->string('bill');
            $table->string('loans');
            $table->string('food');
            $table->string('transport');
            $table->string('weekend');
            $table->string('parents');
            $table->string('family');
            $table->string('total_expenses');
            $table->string('balance_to_spend');
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
        Schema::dropIfExists('kira_budgets');
    }
}
  