<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTissuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tissues', function (Blueprint $table) {
            $table->id();
            $table->string('project_id')->nullable();
            $table->string('project_acronym')->nullable();
            $table->string('category')->nullable();
            $table->string('specimen_type')->nullable();
            $table->string('participant_id')->nullable();
            $table->string('sample_id')->nullable();
            $table->string('aliqout_type')->nullable();
            $table->string('gender')->nullable();
            $table->string('age')->nullable();
            $table->string('BMI')->nullable();
            $table->string('ethinicity')->nullable();
            $table->string('collection_date')->nullable();
            $table->string('donor_status')->nullable();
            $table->string('stored_for')->nullable();
            $table->string('batch_No')->nullable();
            $table->integer('is_active')->default(1);
            $table->foreignId('user_id')->nullable()->constrained()->onUpdate('cascade')->onDelete('restrict');
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
        Schema::dropIfExists('tissues');
    }
}
