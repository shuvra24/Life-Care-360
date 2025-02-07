<?php

// database/migrations/xxxx_xx_xx_create_appointments_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppointmentsTable extends Migration
{
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('doctor_id')->constrained('users')->onDelete('cascade'); // Assuming doctors are also users
            $table->date('date');
            $table->time('time');
            $table->string('status')->default('Pending'); // e.g., Pending, Confirmed, Canceled
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('appointments');
    }
}
