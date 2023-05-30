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
        //
        Schema::create('dining_rooms', function (Blueprint $table) {
            $table->id();
            $table->char('dining_name', 100);
            $table->string('dining_img');
            $table->string('detail_imgs');
            $table->string('default_activity');
            $table->string('dining_rate');
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
