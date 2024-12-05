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
        Schema::create('company_employee_role', function (Blueprint $table) {
            $table->id();
            $table->foreignId('company_employee_id')
            ->constrained('company_employees') 
            ->onDelete('cascade');  
            $table->foreignId('role_id')
            ->constrained('roles') 
            ->onDelete('cascade');  
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('company_employee_role');
    }
};
