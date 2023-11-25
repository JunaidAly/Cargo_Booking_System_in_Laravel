<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCargoBookingsTable extends Migration
{
    public function up()
    {
        Schema::create('cargo_bookings', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('from');
            $table->string('destination');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('cargo_bookings');
    }
}
