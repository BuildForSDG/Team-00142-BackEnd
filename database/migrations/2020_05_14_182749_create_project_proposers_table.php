<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectProposersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_proposers', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->bigIncrements('id');
            $table->integer('phoneNumber');
            $table->string('email',100)->unique();
            $table->integer('nationalId')->unique();
            $table->text('name');
            $table->bigInteger('userId');

            // ! setting the foreign key to type_of_assistances
            $table->foreign('userId')->references('id')->on('users');

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
        Schema::dropIfExists('project_proposers');
    }
}
