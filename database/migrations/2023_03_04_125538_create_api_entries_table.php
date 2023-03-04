<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApiEntriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('api_entries', function (Blueprint $table) {
            $table->id();
            $table->string('api');
            $table->string('description');
            $table->string('auth')->nullable();
            $table->boolean('https');
            $table->string('cors');
            $table->string('link');
            $table->string('category');
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
        Schema::dropIfExists('api_entries');
    }
}
