<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeveloperInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('developer_information', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->index('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('last_formal_education_level_id');
            $table->index('last_formal_education_level_id');
            $table->foreign('last_formal_education_level_id')->references('id')->on('education_levels');
            $table->string('last_formal_education_institution');
            $table->string('last_formal_education_field_of_study');
            $table->unsignedBigInteger('current_formal_education_level_id');
            $table->index('current_formal_education_level_id');
            $table->foreign('current_formal_education_level_id')->references('id')->on('education_levels');
            $table->string('current_formal_education_institution');
            $table->string('current_formal_education_field_of_study');
            $table->text('other_education')->nullable();
            $table->string('skills');
            $table->string('portfolio_link')->nullable();
            $table->string('linkedin_link')->nullable();
            $table->string('phone');
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
        Schema::dropIfExists('developer_information');
    }
}
