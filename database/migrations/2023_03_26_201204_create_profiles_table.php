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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            //user_id
             $table->unsignedBigInteger('user_id')->unique();
             $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            //first name
            $table->string('first_name');
            // last name
            $table->string('last_name');
            //company
            $table->string('company')->nullable();
            //address
            $table->string('address')->nullable();
            //city
            $table->string('city')->nullable();
            //state
            $table->string('state')->nullable();
            //post code
            $table->string('post_code')->nullable();
            //country
            $table->string('country')->nullable();
            //phone
            $table->string('phone')->nullable();
            //image
            $table->string('image')->nullable();
            // website
            $table->string('website')->nullable();
            //date of birth
            $table->date('birth')->nullable();



            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
