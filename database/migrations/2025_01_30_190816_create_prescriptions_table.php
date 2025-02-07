<?php

// database/migrations/xxxx_xx_xx_create_prescriptions_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrescriptionsTable extends Migration
{
    public function up()
    {
        Schema::create('prescriptions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Patient
            $table->foreignId('doctor_id')->constrained('users')->onDelete('cascade'); // Doctor
            $table->text('medicines'); // JSON or text field for medicines
            $table->text('instructions')->nullable(); // Additional instructions
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('prescriptions');
    }
};
