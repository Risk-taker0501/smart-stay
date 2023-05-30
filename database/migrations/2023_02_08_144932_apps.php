<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // //
        Schema::drop('flights');
        Schema::create('apps', function (Blueprint $table) {
            $table->id();
            $table->char('app_name', 100);
            $table->string('app_icon');
            $table->string('app_package');
            $table->string('default_activity');
            $table->string('order');
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
        //
    }
};
