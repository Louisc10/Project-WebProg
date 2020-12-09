<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_transactions', function (Blueprint $table) {
            $table->unsignedBigInteger('transaction_id');
            $table->unsignedBigInteger('shoes_id');
            $table->integer('quantity');
            $table->foreign('transaction_id')->references('id')->on('header_transactions');
            $table->foreign('shoes_id')->references('id')->on('shoes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_transactions');
    }
}
