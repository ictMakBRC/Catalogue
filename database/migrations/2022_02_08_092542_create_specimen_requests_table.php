<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpecimenRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('specimen_requests', function (Blueprint $table) {
            $table->id();
            $table->string('email')->nullable();
            $table->string('session')->nullable();
            $table->string('name')->nullable();
            $table->string('position')->nullable();
            $table->string('organization')->nullable();
            $table->string('subject')->nullable();
            $table->text('details')->nullable();
            $table->string('requesterip')->nullable();
            $table->string('requestercounry')->nullable();
            $table->text('requestercity')->nullable();
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
        Schema::dropIfExists('specimen_requests');
    }
}
