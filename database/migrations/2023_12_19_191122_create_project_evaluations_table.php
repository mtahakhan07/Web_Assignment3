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
        Schema::create('project_evaluations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('project_id');
            $table->unsignedBigInteger('evaluator_id');
            $table->integer('score'); // Assuming a score out of 10
            $table->timestamps();
        
            $table->foreign('project_id')->references('id')->on('fyp_projects');
            $table->foreign('evaluator_id')->references('id')->on('users'); // Link to the evaluator in the users table
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('project_evaluations');
    }
};
