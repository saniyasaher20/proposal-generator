<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
return new class extends Migration {
    public function up(): void
    {
        Schema::create('proposal_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('proposal_id')->constrained()->cascadeOnDelete();

            $table->string('item_code');
            $table->string('item_name');
            $table->text('item_description')->nullable();
            $table->integer('item_quantity')->default(1);
            $table->string('location')->nullable();
            $table->string('thumbnail_path')->nullable();
            $table->text('materials')->nullable();
            $table->json('drawings')->nullable();

            $table->string('item_category')->nullable();
            $table->text('manufacturer_details')->nullable();
            $table->string('product_code')->nullable();
            $table->string('revision')->nullable();
            $table->string('model_name')->nullable();
            $table->string('model_number')->nullable();
            $table->integer('item_width')->nullable();
            $table->integer('item_length')->nullable();
            $table->integer('item_height')->nullable();
            $table->string('item_material')->nullable();
            $table->text('item_details')->nullable();
            $table->text('item_note')->nullable()->default('Supplier to coordinate the items structure and stability');

            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('proposal_items');
    }
};
