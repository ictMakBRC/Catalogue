<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('project_acronym')->nullable();
            $table->string('project_name')->nullable();
            $table->string('project_design')->nullable();
            $table->text('project_description')->nullable();
            $table->string('disease')->nullable();
            $table->string('project_funder')->nullable();
            $table->string('H3_africa_affiliated')->nullable();
            $table->string('pcode')->nullable();
            $table->string('status')->ndefault('Active');
            $table->string('country_of_collection')->nullable();
            $table->string('step')->default(1);
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
        Schema::dropIfExists('projects');
    }
}
