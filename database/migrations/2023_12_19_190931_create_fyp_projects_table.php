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
        Schema::create('fyp_projects', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->json('keywords'); // Storing keywords as a JSON array
            $table->unsignedBigInteger('group_id'); // Assuming each project is linked to an FYP group
            $table->timestamps();
        
            $table->foreign('group_id')->references('id')->on('users'); // Link to the FYP group in the users table
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
