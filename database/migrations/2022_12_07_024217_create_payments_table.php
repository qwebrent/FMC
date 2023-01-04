<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->string('fullname', 64);
            $table->string('phone', 32);
            $table->string('email', 32);
            $table->string('event_type', 64);
            $table->string('event_date', 64);
            $table->string('package_num', 32);
            $table->string('modeOfPayment', 64)->nullable();
            $table->string('referenceNum', 64)->unique()->nullable();
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
        Schema::dropIfExists('payments');
    }
}
