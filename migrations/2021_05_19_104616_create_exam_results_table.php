<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExamResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exam_results', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable(false);
            $table->string('number_of_people')->nullable(false);
            $table->unsignedBigInteger('number_of_people_received')->nullable(false);
            $table->string('categories');
            $table->unsignedBigInteger('institution_id');
            $table->timestamps();         
            // Foreign Key
             $table->foreign('institution_id')
             ->references('id')
             ->on('institutions')
             ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('exam_results');
    }
}
