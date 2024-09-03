<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolesTable extends Migration
{
    public function up()
    {
        // Drop the roles table if it exists to avoid issues with existing columns
        Schema::dropIfExists('roles');
        
        // Create the roles table
        Schema::create('roles', function (Blueprint $table) {
            $table->id(); // Auto-incrementing primary key
            $table->string('role')->unique(); // Role name as a unique string
            $table->timestamps(); // Timestamps for created_at and updated_at
        });
    }

    public function down()
    {
        // Drop the roles table if it exists
        Schema::dropIfExists('roles');
    }
}
