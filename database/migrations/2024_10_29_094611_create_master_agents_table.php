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
        Schema::create('master_agents', function (Blueprint $table) {
            $table->id();
            $table->foreignId('superagent_id')->constrained()->onDelete('cascade');
            $table->string('master_agent_id',50);
            $table->string('master_agent_name',100);
            $table->string('whatsapp',15);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('master_agents');
    }
};
