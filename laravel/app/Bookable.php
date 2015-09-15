<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bookable extends Model
{
    protected $fillable = ['name', 'primary_image', 'owner', 'type', 'description', 'additional_images'];
}
