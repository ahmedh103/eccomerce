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
        Schema::create('categories', function (Blueprint $table) {
        $table->id();
        $table->text('name');
        $table->text('slug');
         $table->bigInteger('department_id')->unsigned();
        $table->foreign('department_id')->references('id')->on('departments')->onDelete('cascade');
        //$table->foreignId('department_id')->constrained('departments')->on('cascade');
        $table->string('image');

        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
