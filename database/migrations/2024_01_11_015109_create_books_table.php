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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('title', 40)->default("HowToCode");
            $table->string('author', 40)->default("AgustinChavero");
            $table->text('preview', 1000)->nullable();
            $table->integer('edition')->nullable();
            $table->boolean('is_deleted')->default(false);
            $table->timestamps('publication_year')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
