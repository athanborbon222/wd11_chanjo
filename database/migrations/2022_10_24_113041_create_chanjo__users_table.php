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
        Schema::create('chanjo__users', function (Blueprint $table) {
            $table->id();
            $table->string('user_Firstname');
            $table->string('user_Lastname');
            $table->string('user_Address');
            $table->string('user_email');
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
        Schema::dropIfExists('chanjo__users');
    }
};
