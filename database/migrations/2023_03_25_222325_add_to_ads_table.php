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
        Schema::table('ads', function (Blueprint $table) {
            $table->foreignId("category_id")->constrained("categories")->cascadeOnUpdate();
            $table->foreignId("user_id")->constrained()->cascadeOnUpdate();
            $table->text("price");
            $table->text("description");
            $table->enum("type",["new","used"]);
            $table->enum("status",["pending","approved","rejected",])->default("pending");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('ads', function (Blueprint $table) {
            $table->dropColumn(['category_id','user_id','price','description','type','status']);
        });
    }
};
