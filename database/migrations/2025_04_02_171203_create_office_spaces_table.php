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
        Schema::create('office_spaces', function (Blueprint $table) {
            $table->id();
            $table->String('name');
            $table->String('thumbail');
            $table->String('address');
            $table->boolean('is_open');
            $table->boolean('is_full_booked');
            $table->unsignedInteger('price');
            $table->unsignedInteger('duration');
            $table->text('about');
            $table->foreignId('city_id')->constrained()->cascadeOnDelete();
            $table->String('slug')->unique();
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
        Schema::dropIfExists('office_spaces');
    }
};
