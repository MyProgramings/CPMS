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
        Schema::create('r_def_meds', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained('users')->cascadeOnDelete();
            $table->string('pharmacist')->nullable();
            $table->string('preparer')->nullable();
            $table->foreignId('appointment_id')->nullable()->constrained('appointments')->cascadeOnDelete();
            $table->foreignId('patient_id')->nullable()->constrained('patients')->cascadeOnDelete();
            $table->foreignId('inventoris_id')->nullable()->constrained('inventoris')->cascadeOnDelete();
            $table->string('quantity')->nullable();
            $table->string('quantity_total')->nullable();
            $table->string('medicine_type')->nullable();
            $table->string('power')->nullable();
            $table->integer('each_day')->nullable();
            $table->integer('duration')->nullable();
            $table->boolean('confirm_med')->nullable();
            $table->boolean('confirm')->nullable();
            $table->string('description_medic')->nullable();
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
        Schema::dropIfExists('r_def_meds');
    }
};
