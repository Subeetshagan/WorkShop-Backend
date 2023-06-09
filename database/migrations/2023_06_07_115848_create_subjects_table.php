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
        
        Schema::create('subjects', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('course_id');
            $table->string('title',100);
            $table->string('description',250);
            $table->timestamps();



            $table->foreign('course_id')
                ->references('id')
                ->on('courses')->onDelete('cascade');      ///onDelete => null
        });
      
        Schema::enableForeignKeyConstraints();
    }

     /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subjects');
    }
};