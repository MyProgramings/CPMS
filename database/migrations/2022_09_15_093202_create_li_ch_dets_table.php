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
        Schema::create('li_ch_dets', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('small_value')->nullable();
            $table->string('large_value')->nullable();
            $table->foreignId('list_checkup_id')->nullable()->constrained('list_checkups')->cascadeOnDelete();
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
        Schema::dropIfExists('li_ch_dets');
    }
};
