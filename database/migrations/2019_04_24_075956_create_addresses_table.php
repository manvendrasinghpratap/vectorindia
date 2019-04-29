<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->increments('id');
            $table->text('address')->nullable();
            $table->string('email','150')->nullable();
            $table->string('mobile','150')->nullable();
            $table->string('phoneno','150')->nullable();
            $table->string('googlemapsrc','190')->nullable();
            $table->tinyInteger('status')->default(1)->comment('1->active,0->inactive');
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
        Schema::dropIfExists('addresses');
    }
}
