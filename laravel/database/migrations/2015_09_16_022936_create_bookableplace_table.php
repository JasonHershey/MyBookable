<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookableplaceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    // protected $fillable = ['name', 'primary_image', 'owner', 'type', 'description', 'additional_images'];
    // protected $fillable = array_push(Bookable::$fillable, 'location', 'nonsmoking', 'wifi', 'ADA', 'insurance', 'capacity');
    public function up()
    {
        Schema::create('bookableplace', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->json('images'); // {'primary': 'url', 'secondary': ['urls']}
            $table->string('owner')->refrences('id')->on('users')->onDelete('cascade');
            $table->string('type');
            $table->text('description');
            $table->string('location');
            $table->boolean('nonsmoking');
            $table->boolean('wifi');
            $table->boolean('ADA');
            $table->boolean('insurance');
            $table->integer('capacity');
            $table->softDeletes(); // deleted_at
            $table->timestamps(); // created_at, updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('bookableplace');
    }
}
