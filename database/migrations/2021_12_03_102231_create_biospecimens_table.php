<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBiospecimensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biospecimens', function (Blueprint $table) {
            $table->id();
            $table->foreignId('project_id')->nullable();
            $table->string('ProjectAcronym')->nullable();
            $table->string('PTID')->nullable();
            $table->string('SampleID')->nullable();
            $table->string('AliquotID')->nullable();
            $table->foreignId('specimen_type_id');
            $table->string('Gender')->nullable();
            $table->string('Age')->nullable();
            $table->string('CaseControl')->nullable();
            $table->string('VisitName')->nullable();
            $table->string('DateCollected')->nullable();
            $table->string('SPECIMEN_SOURCE')->nullable();
            $table->string('SOURCE_ORGANISM')->nullable();
            $table->string('PURITY')->nullable();
            $table->string('CONCENTRATION')->nullable();
            $table->integer('is_active')->default(1);
            $table->foreignId('user_id');
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
        Schema::dropIfExists('biospecimens');
    }
}
