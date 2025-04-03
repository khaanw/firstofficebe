<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking_transactions', function (Blueprint $table) {
            $table->id();
            $table->String('name');
            $table->String('phone_number');
            $table->String('booking_trx_id');
            $table->boolean('is_paid');
            $table->date('started_at');
            $table->unsignedInteger('total_amount');
            $table->unsignedInteger('duration');
            $table->date('ended_at');
            $table->foreignId('office_space_id')->constrained()->cascadeOnDelete();
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
        Schema::dropIfExists('booking_transactions');
    }
};
