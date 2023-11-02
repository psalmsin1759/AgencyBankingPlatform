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
        Schema::create('service_form_data', function (Blueprint $table) {
            $table->id();
           
            $table->string('data');
            $table->enum('type', ['single', 'multiple']);
            $table->string('value');
            $table->tinyInteger('required')->default(0); // 1 for required, 0 for not required
            
            $table->unsignedBigInteger('service_id');
            $table->foreign('service_id')->references('id')->on('services');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service_form_data');
    }
};
