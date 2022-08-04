<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectObjectivesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_objectives', function (Blueprint $table) {
            $table->id();
            $table->string('objective_name')->nullable();
            $table->foreignId('project_id')->nullable()->constrained()->onUpdate('cascade')->onDelete('restrict');
            $table->string('project_code')->nullable();
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
        Schema::dropIfExists('project_objectives');
    }
}
