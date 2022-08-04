<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carts', function (Blueprint $table) {
            $table->id();
            $table->string('session_id')->nullable();
            $table->string('email')->nullable();
            $table->string('item_type')->nullable();
            $table->string('project_acronym')->nullable();
            $table->string('specimen_type')->nullable();
            $table->string('sample_id')->nullable();
            $table->string('aliqout_type')->nullable();
            $table->string('gender')->nullable();
            $table->string('age')->nullable();
            $table->string('ethinicity')->nullable();
            $table->string('donor_status')->nullable();
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
        Schema::dropIfExists('carts');
    }
}
