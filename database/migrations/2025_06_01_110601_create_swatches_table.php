<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
return new class extends Migration {
    public function up(): void
    {
        Schema::create('swatches', function (Blueprint $table) {
            $table->id();
            $table->foreignId('proposal_item_id')->constrained()->cascadeOnDelete();

            $table->string('image_path');
            $table->string('name');
            $table->string('code');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('swatches');
    }
};
