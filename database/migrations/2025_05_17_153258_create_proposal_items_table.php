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
        Schema::create('proposal_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('proposal_id')->constrained()->onDelete('cascade');
            $table->string('code');
            $table->string('name');
            $table->text('description')->nullable();
            $table->integer('quantity');
            $table->string('thumbnail_path')->nullable();
            $table->json('materials')->nullable();
            $table->json('drawings')->nullable();
            $table->string('section');
            $table->json('specs')->nullable();
            $table->text('remarks')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proposal_items');
    }
};
