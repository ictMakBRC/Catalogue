<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrgansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('project_id')->nullable()->constrained()->onUpdate('cascade')->onDelete('restrict');
            $table->string('ProjectAcronym')->nullable();
            $table->string('Category')->nullable();
            $table->string('SampleID')->nullable();
            $table->string('ParticipantID')->nullable();
            $table->foreignId('specimen_type_id')->nullable()->constrained()->onUpdate('cascade')->onDelete('restrict');
            $table->string('Quantity')->nullable();
            $table->string('Aliqout')->nullable();
            $table->string('Gender')->nullable();
            $table->string('Age')->nullable();
            $table->string('BMI')->nullable();
            $table->string('Ethinicity')->nullable();
            $table->string('CollectionDate')->nullable();
            $table->string('Donor_Sample_Status')->nullable();
            $table->string('Stored_for')->nullable();
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
        Schema::dropIfExists('organs');
    }
}
