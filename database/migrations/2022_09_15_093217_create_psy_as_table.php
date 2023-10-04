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
        Schema::create('psy_as', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained('users')->cascadeOnDelete();
            $table->string('ps_as')->nullable();
            $table->foreignId('patient_id')->nullable()->constrained('patients')->cascadeOnDelete();
            $table->foreignId('appointment_id')->nullable()->constrained('appointments')->cascadeOnDelete();
            $table->string('dorm')->nullable();
            $table->string('delicacies')->nullable();
            $table->string('memory')->nullable();
            $table->string('edgy_and_adenological')->nullable();
            $table->string('ailment_precognition')->nullable();
            $table->string('direction_social')->nullable();
            $table->string('thinking_in_Disease')->nullable();
            $table->string('medicament_traces')->nullable();
            $table->string('psycho_traces')->nullable();
            $table->text('proposals_and_recommendations')->nullable();
            $table->longText('notes_psy')->nullable();
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
        Schema::dropIfExists('psy_as');
    }
};
