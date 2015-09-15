<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bookable extends Model
{
    protected $fillable = ['name', 'primary_image', 'owner', 'type', 'description', 'additional_images'];
}
