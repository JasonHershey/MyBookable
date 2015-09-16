<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    //  protected $fillable = ['first_name', 'last_name', 'username', 'email', 'password', 'address', 'city', 'zip', 'state', 'phones', 'social_media'];
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->string('password', 60);
            $table->string('address');
            $table->string('city');
            $table->string('state');
            $table->string('zip');
            $table->json('phones');
            $table->json('social_media');
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
        Schema::drop('users');
    }
}
