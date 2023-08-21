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
        Schema::create('personals', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('personal_email');
            $table->date('date_of_birth');
            $table->string('gender');
            $table->string('religion');
            $table->string('personal_contact_number');
            $table->string('residential_address');
            $table->string('permanent_address');
            $table->string('cnic');
            $table->string('meezan_bank');
            $table->string('iban_number')->default(null);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personals');
    }
};
