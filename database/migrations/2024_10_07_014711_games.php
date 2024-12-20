<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('games', function (Blueprint $table) {
        $table->id();
        $table->foreignId('home_team_id')->constrained('teams')->onDelete('cascade');
        $table->foreignId('away_team_id')->constrained('teams')->onDelete('cascade');
        $table->dateTime('scheduled_at');
        $table->string('location');
        $table->integer('home_team_score')->nullable();
        $table->integer('away_team_score')->nullable();
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
