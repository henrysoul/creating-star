<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChildrenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('children', function (Blueprint $table) {
            $table->id();
            $table->string('uuid');
            $table->foreignId('contest_id');
            $table->integer('reg_number');
            $table->string('reg_number_copy');
            $table->string('name');
            $table->string('parent_name');
            $table->string('address');
            $table->string('gender');
            $table->string('age');
            $table->string('email');
            $table->string('phone');
            $table->string('less_than_a_year');
            $table->integer('stage1_votes')->default(0);
            $table->integer('stage2_votes')->default(0);
            $table->integer('stage3_votes')->default(0);
            $table->integer('stage1_extra_votes')->default(0);
            $table->boolean('passed_stage1')->default(0);
            $table->boolean('passed_stage2')->default(0);
            $table->boolean('active')->default(1);
            $table->string('photo');
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
        Schema::dropIfExists('children');
    }
}
