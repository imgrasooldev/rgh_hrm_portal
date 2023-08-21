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
        Schema::create('work_experiences', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('previous_company_name')->default(null);
            $table->string('service_duration')->default(null);
            $table->string('department')->default(null);
            $table->string('designation')->default(null);
            $table->string('refference_name')->default(null);
            $table->string('refference_no')->default(null);
            $table->string('refference_designation')->default(null);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('work_experiences');
    }
};
