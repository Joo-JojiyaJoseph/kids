<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->longText('address');
            $table->string('designation');
            $table->string('started_on');
            $table->string('ended_on');

            $table->longText('accomadation');
            $table->string('allowance');
            $table->string('transportaion_expense');
            $table->string('mobile');

            $table->longText('vehicle');
            $table->string('yearlyticket');
            $table->string('medical_payment');
            $table->string('bonus');

            $table->string('visa_charge');
            $table->string('insurance');
            $table->string('salary');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
