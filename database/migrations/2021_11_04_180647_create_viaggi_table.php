<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateViaggiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('viaggi', function (Blueprint $table) {
            $table->id();
            $table->string('city', 30);
            $table->string('region', 50);
            $table->string('province', 50);
            $table->string('country', 50);
            $table->string('continent', 20);
            $table->text('description');
            $table->string('type_accommodation', 30);
            $table->string('type_trasport', 20);
            $table->date('date_departure');
            $table->date('date_returnphp');
            $table->float('price', 8, 2, false);
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
        Schema::dropIfExists('viaggi');
    }
}
