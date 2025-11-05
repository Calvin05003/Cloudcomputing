<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('user_data', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('full_name', 150);
            $table->string('student_email', 191);  
            $table->string('password_hash', 255);           
            $table->date('birthdate');                        
            $table->timestamps();                         
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('user_data');
    }
};