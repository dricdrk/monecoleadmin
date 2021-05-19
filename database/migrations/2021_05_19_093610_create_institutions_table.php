<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstitutionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('institutions', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('states');
            $table->string('adress');
            $table->string('mail')->unique()->nullable();
            $table->string('phone_number')->unique();
            $table->timestamps();         
            // Foreign Key
            //  $table->foreign('performance_id')
            //  ->references('id')
            //  ->on('performances')
            //  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('institutions');
    }
}
