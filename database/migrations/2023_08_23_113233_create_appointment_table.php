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
       /* Schema::create('appointment', function (Blueprint $table) {
            $table->string('name');
            $table->string('email');
            $table->number_format('Phone');
            $table->date('Ldate');
            $table->time('Ltime');
            $table->description('description')->nullable();
            $table->department('Dno');
        });*/
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointment');
    }
};
