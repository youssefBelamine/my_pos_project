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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string("designation")->unique();
            $table->double("prix_ht");
            $table->double("tva");
            $table->double("stock");
            $table->string("photo")->nullable();
            $table->string("code_barre")->nullable();
            $table->foreignId("famille_id")->constrained();
            $table->foreignId("marque_id")->constrained();
            $table->foreignId("unite_id")->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
