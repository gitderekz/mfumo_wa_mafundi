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
        Schema::create('fundis', function (Blueprint $table) {
            $table->id();
            $table->string('jinakwanza');
            $table->string('jinakati'); 
            $table->string('jinamwisho');
            $table->string('gender');
            $table->date('dob');
            $table->string('uraia');
            $table->string('nida');
            $table->string('elimu');
            $table->string('uzoefu');
            $table->string('mkoa');
            $table->string('wilaya');
            $table->string('kata');
            $table->string('mtaa');
            $table->string('mji');
            $table->string('phone1');
            $table->string('phone2');
            $table->string('email');
            $table->string('uvtaasisi');
            $table->string('jinamdhamini');
            $table->string('uhusianomdhamini');
            $table->string('nambamdhamini');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fundis');
    }
};
