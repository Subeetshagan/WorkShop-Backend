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
        schema::disableForeignkeyconstraints();

        Schema::create('courses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title',260);
            $table->string('description',260);
            $table->string('fees',260);

            $table->timestamps();
        });

        schema::enableForeignkeyconstraints();

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};


    

 
