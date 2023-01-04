<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->string('lname', 32);
            $table->string('fname', 32);
            $table->string('mname', 32)->nullable();
            $table->string('fullname', 64);
            $table->string('phone', 32);
            $table->string('email', 32);
            $table->string('event_type', 64);
            $table->date('event_date', 64);
            $table->string('package', 32)->nullable();
            $table->integer('persons');
            $table->string('message', 128)->nullable();
            $table->integer('isConfirmed')->default(0);
            $table->integer('isRefused')->default(0);
            $table->integer('isCustomized')->default(0);
            $table->integer('isFinished')->default(0);
            $table->integer('isOngoing')->default(0);
            $table->integer('isPaymentPending')->default(0);
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
        Schema::dropIfExists('reservations');
    }
}
