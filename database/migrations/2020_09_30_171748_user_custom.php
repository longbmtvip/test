<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserCustom extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('user_custom', function (Blueprint $table) {
                $table->increments('id');
                $table->string('email');
                $table->string('name');
                $table->timestamp('email_verified_at')->nullable();
                $table->string('password');
                  $table->string('quyen');
                $table->rememberToken();
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
    Schema::dropIfExists('user_custom');
    }
}
