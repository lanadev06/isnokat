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
        Schema::create('employee_works', function (Blueprint $table) {
            $table->foreignId('employee_id')->index()->constrained()->cascadeOnDelete();
            $table->foreignId('work_id')->index()->constrained()->cascadeOnDelete();
            $table->primary(['employee_id', 'work_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employee_work');
    }
};
