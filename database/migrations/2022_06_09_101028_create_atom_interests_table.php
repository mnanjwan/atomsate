<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAtomInterestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('atom_interests', function (Blueprint $table) {
            $table->id();
            $table->string('investment_category');
            $table->string('firstname');
            $table->string('secondname')->nullable();
            $table->string('thirdname');
            $table->string('email')->unique;
            $table->integer('phone');
            $table->date('dob');
            $table->string('gender')->nullable();;
            $table->string('country');
            $table->bigInteger('price');
            $table->char('note');
            $table->char('interest_id')->unique;
            // $table->foreign('plan_id')->references('id')->on('users');
            // $table->foreign('atom_id')->references('id')->on('users');
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
        Schema::dropIfExists('atom_interests');
    }
}
