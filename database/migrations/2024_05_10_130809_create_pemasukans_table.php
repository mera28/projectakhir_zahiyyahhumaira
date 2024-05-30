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
        Schema::create('pemasukans', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description')->nullable();
            $table->integer('stock');
            $table->date('tanggal');
            $table->timestamps();
           
        });
       
        Schema::table('pemasukans', function (Blueprint $table) {
           
        });
       
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pemasukans', function (Blueprint $table) {
        });

        Schema::table('pemasukans', function (Blueprint $table) {
        });

        Schema::dropIfExists('pemasukans');
    }

};

