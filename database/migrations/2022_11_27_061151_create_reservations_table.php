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
            $table->string('lname');
            $table->string('fname');
            $table->string('mname')->nullable();
            $table->string('fullname');
            $table->string('phone');
            $table->string('email');
            $table->string('event_type');
            $table->date('event_date');
            $table->string('package')->nullable();
            $table->integer('persons');
            $table->string('message')->nullable();
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
