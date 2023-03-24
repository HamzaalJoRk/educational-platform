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
        Schema::create('sessions_contents', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->text('Content');
            $table->string('link');
            $table->string('CreatedDate');
            $table->integer('ContentId');
            $table->integer('SessionId');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sessions_contents');
    }
};
