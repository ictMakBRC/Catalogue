<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBioSpecimenRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bio_specimen_requests', function (Blueprint $table) {
            $table->id();
            $table->string('session_id')->nullable();
            $table->string('email')->nullable();
            $table->string('item_type')->nullable();
            $table->string('project_acronym')->nullable();
            $table->string('specimen_type')->nullable();
            $table->string('quantity')->nullable();
            $table->text('details')->nullable();
            $table->string('gender')->nullable();
            $table->string('age')->nullable();
            $table->foreignId('user_id')->nullable();
            $table->integer('status')->nullable()->default(0);
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
        Schema::dropIfExists('bio_specimen_requests');
    }
}
