<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRiceOfThePhilInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rice_of_the_phil_info', function (Blueprint $table) {
            $table->id();
            $table->string('name_of_the_rice');
            $table->string('variety');
            $table->decimal('price',10,2);
            $table->string('most_planted_region');
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
        Schema::dropIfExists('rice_of_the_phil_info');
    }
}
