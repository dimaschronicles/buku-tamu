<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGuestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guests', function (Blueprint $table) {
            $table->id('id_guest');
            $table->string('name_guest');
            $table->string('address_guest');
            $table->string('agency_guest');
            $table->string('email_guest');
            $table->string('telp_guest', 20);
            $table->text('description_guest');
            $table->dateTime('date_created_guest')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('guests');
    }
}
