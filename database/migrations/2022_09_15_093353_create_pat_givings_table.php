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
        Schema::create('pat_givings', function (Blueprint $table) {
            $table->id();
            $table->string('giver')->nullable();
            $table->foreignId('patient_id')->nullable()->constrained('patients')->cascadeOnDelete();
            $table->foreignId('r_def_med_id')->nullable()->constrained('r_def_meds')->cascadeOnDelete();
            $table->foreignId('appointment_id')->nullable()->constrained('appointments')->cascadeOnDelete();
//-------------------------------Vital signs--------------------------------------------------------------
            $table->string('bp', 10)->nullable();
            $table->string('t', 10)->nullable();
            $table->string('p', 10)->nullable();
            $table->string('r', 10)->nullable();
            $table->string('pain', 10)->nullable();
            $table->string('wt', 10)->nullable();
            $table->string('ht', 10)->nullable();
            $table->string('bsa', 10)->nullable();
            $table->string('VAD', 10)->nullable();
            $table->string('ES', 10)->nullable();
            $table->string('cycle', 10)->nullable();
            $table->string('day', 15)->nullable();
//-------------------------------New--------------------------------------------------------------
            $table->string('referred_doctor')->nullable();
            $table->string('check_in')->nullable();
            $table->string('registry_sheet')->nullable();
            $table->string('pathology_report')->nullable();
            $table->string('radiology_report')->nullable();
            $table->string('previous_ctx')->nullable();
//-------------------------------CTX--------------------------------------------------------------
            $table->date('CTX_pre_date')->nullable();
            $table->string('ctx_previous_cycle_date', 10)->nullable();
            $table->string('pre_ctx_lab_test', 10)->nullable();
            $table->string('health_cente_visit', 10)->nullable();
            $table->string('Inc_of_fever_bet_cyc', 10)->nullable();
            $table->string('If_yes_value', 10)->nullable();
            $table->string('Does_pthave_thermometer', 10)->nullable();
            $table->string('new_complain')->nullable();
            $table->string('appointment_of_the_two_cycle')->nullable();;
//-------------------------------Notes--------------------------------------------------------------
            $table->text('nursing_notes')->nullable();
            $table->text('doctor_note')->nullable();
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
        Schema::dropIfExists('pat_givings');
    }
};
