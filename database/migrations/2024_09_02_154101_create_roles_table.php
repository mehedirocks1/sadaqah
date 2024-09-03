<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolesTable extends Migration
{
    public function up()
    {
        // Create the roles table if it does not already exist
        if (!Schema::hasTable('roles')) {
            Schema::create('roles', function (Blueprint $table) {
                $table->id(); // Auto-incrementing primary key
                $table->unsignedBigInteger('role_id')->unique(); // Additional unique column for role_id
                $table->string('role'); // Additional column for role name as a string
                $table->timestamps(); // Timestamps for created_at and updated_at
            });
        }
    }

    public function down()
    {
        // Drop the roles table if it exists
        Schema::dropIfExists('roles');
    }
}
