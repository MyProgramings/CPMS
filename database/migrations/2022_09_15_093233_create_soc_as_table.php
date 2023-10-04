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
        Schema::create('soc_as', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained('users')->cascadeOnDelete();
            $table->string('so_as')->nullable();
            $table->foreignId('patient_id')->nullable()->constrained('patients')->cascadeOnDelete();
            $table->foreignId('appointment_id')->nullable()->constrained('appointments')->cascadeOnDelete();
            //---------------Information some of Patient--------------------------------
            $table->string('monthly_incomes')->nullable();
            $table->string('incomes_source')->nullable();
            $table->string('living_kind')->nullable();
            $table->string('rent')->nullable();
            $table->string('master_name')->nullable();
            $table->string('master_phone')->nullable();
            //---------------Sociologist date and infirmity develops---------------------
            $table->string('pre_infestation')->nullable();
            $table->string('post_infestation')->nullable();
            //---------------State of health---------------------------------------------
            $table->date('infestation_date')->nullable();
            $table->string('traveling')->nullable();
            $table->string('other_infestation_from_family')->nullable();
            $table->string('disease_kind')->nullable();
            $table->string('problem_rating')->nullable();
            $table->string('Doctor_view_of_patient')->nullable();
            $table->string('sociologist_appreciations')->nullable();
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
        Schema::dropIfExists('soc_as');
    }
};
