<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contests', function (Blueprint $table) {
            $table->id();
            $table->string('uuid');
            $table->string('name');
            $table->integer('stage1_minimum_vote');
            $table->integer('stage2_minimum_vote');
            $table->date('stage1_start_date');
            $table->date('stage1_end_date');
            $table->date('stage2_start_date');
            $table->date('stage2_end_date');
            $table->date('stage3_start_date');
            $table->date('stage3_end_date');
            $table->date('registration_start_date');
            $table->date('registration_end_date');
            $table->integer('cost_per_vote');
            $table->enum('active_stage', [1, 2, 3])->default(1);
            $table->boolean('stage1_status')->default(0)->comment('status of stage opened or closed when 1 closed by admin');
            $table->boolean('stage2_status')->default(0)->comment('status of stage opened or closed when 1 closed by admin');
            $table->boolean('stage3_status')->default(0)->comment('status of stage opened or closed when 1 closed by admin');
            $table->boolean('opened')->default(0)->comment('opened means they can vote or contest is on');
            $table->boolean('can_register')->default(1)->comment('if registration is on or not');
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
        Schema::dropIfExists('contests');
    }
}
