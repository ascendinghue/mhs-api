<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('names', function (Blueprint $table) {
            $table->id();
            $table->string('name_key');
            $table->string('family_name');
            $table->string('given_name');
            $table->string('middle_name');
            $table->string('maiden_name');
            $table->string('suffix');
            $table->string('keywords');
            $table->string('date_of_birth');
            $table->string('date_of_death');
            $table->text('public_notes');
            $table->text('staff_notes');
            $table->string('bio_filename');
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
        Schema::dropIfExists('names');
    }
}
