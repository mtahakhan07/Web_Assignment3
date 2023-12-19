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
        Schema::create('evaluator_preferences', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('evaluator_id');
            $table->string('preference'); // Can be a category or specific keyword
            $table->timestamps();
        
            $table->foreign('evaluator_id')->references('id')->on('users'); // Link to the evaluator in the users table
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fyp_projects');
    }
};
