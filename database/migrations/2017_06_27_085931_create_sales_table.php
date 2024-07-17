<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->json("details");
            $table->integer('unit');
            $table->float('netAmt', 8,2);
            $table->float('cgstPercent', 8, 2);
            $table->float('cgstAmt', 8, 2);
            $table->float('sgstPercent', 8, 2);
            $table->float('sgstAmt', 8, 2);
            $table->float('discountPercent', 8,2);
            $table->float('discountAmt', 8,2);
            $table->float('totalAmt', 8,2);
            $table->string('status');
            $table->string('tmode');

            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->softDeletes();
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
        Schema::dropIfExists('sales');
    }
}
