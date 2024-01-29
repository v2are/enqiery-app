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
        Schema::create('enquiries', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('name');
            $table->string('contact_num');
            $table->integer('adult');
            $table->integer('child');
            $table->integer('no_of_night');
            $table->date('tour_date');
            $table->string('budget');
            $table->integer('enquiry_status');
            $table->integer('enquiry_source');
            
            



            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('enquiries');
    }
};
