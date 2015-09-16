<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Bookable;

class BookablePlace extends Bookable
{
    protected $table = 'BookablePlace';
    protected $fillable = array_push(Bookable::$fillable, 'location', 'nonsmoking', 'wifi', 'ADA', 'insurance', 'capacity');
}
