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
        Schema::create('homes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('cnic');
            $table->text('dob');
            $table->string('jobtitle');
            $table->string('gender');
            $table->text('number');
            $table->string('address');
            $table->string('qualification');
            $table->text('university');
            $table->string('cgpa');
            $table->text('completion');
            $table->string('experience');
            $table->string('salary');
            $table->string('working');
            $table->string('file');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('homes');
    }
};
