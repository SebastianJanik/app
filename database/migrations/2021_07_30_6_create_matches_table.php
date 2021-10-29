<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matches', function (Blueprint $table) {
            $table->id();
            $table->foreignId('round_id')->constrained('rounds')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('status_id')->default('15')->constrained('statuses')->onUpdate('cascade')->onDelete('cascade');
            $table->date('date')->nullable();
            $table->string('town')->nullable();
            $table->string('protocol')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('matches');
    }
}
