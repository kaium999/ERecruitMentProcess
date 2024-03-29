<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cvs', function (Blueprint $table) {
            $table->id();
            $table->string('cvName');
            $table->unsignedBiginteger('applicant_id');
            $table->foreign('applicant_id')
            ->references('id')->on('applicants')
             ->onDelete('cascade');
             $table->unsignedBiginteger('jobpost_id');
             $table->foreign('jobpost_id')
            ->references('id')->on('jobposts')
             ->onDelete('cascade');

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
        Schema::dropIfExists('cvs');
    }
};
