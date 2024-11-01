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
        Schema::create('super_agents', function (Blueprint $table) {
            $table->id();
            $table->foreignId('admin_id');
            $table->string('super_agent_id',50);
            $table->string('super_agent_name',100);
            $table->string('whatsapp',15);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('super_agents');
    }
};
