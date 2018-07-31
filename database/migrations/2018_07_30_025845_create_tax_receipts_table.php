<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTaxReceiptsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tax_receipts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('textid');
            $table->string('account_holder');
            $table->string('ic');
            $table->string('add1');
            $table->string('add2');
            $table->string('add3');
            $table->string('add4');
            $table->string('postcode');
            $table->string('state');
            $table->string('channel');
            $table->date('trans_date');
            $table->float('amount');
            $table->string('payment_mode');
            $table->string('remarks');
            $table->tinyInteger('added_by');
            $table->tinyInteger('issued_by');
            $table->tinyInteger('status');
            $table->timestamps();
            $table->integer('project_code');
            $table->tinyInteger('receipt_for');
            $table->string('attn_person');
            $table->string('designation');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tax_receipts');
    }
}
