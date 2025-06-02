<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
return new class extends Migration {
    public function up(): void
    {
        Schema::create('proposals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();

            $table->string('project_name');
            $table->integer('project_code')->unique();
            // $table->string('client_name');
            $table->date('issue_date')->default(now());
            $table->string('revision_label')->nullable();
            $table->enum('status', ['draft', 'pending', 'approved', 'rejected'])->default('draft');

            $table->string('project_location')->nullable();
            $table->string('spec_name')->nullable();
            $table->string('spec_series')->nullable();
            $table->string('spec_area')->nullable();

            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('proposals');
    }
};

