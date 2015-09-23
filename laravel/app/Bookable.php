<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bookable extends Model
{
  // rates: json data
  /*
    {
      'default': [320.00, 'monthly']
      'default': [the default rate, period of time]
      '06:17:00-09.15.2015>00:00:00-10:16:2015': [300, 'monthly']
      'time-date>time-date': [rate, period of time]
    }
  */
  // hours: json data
  /*
    {
      'blocked': {
        'time-date>time-date': rate, *NULL IF NOT AVAIL*
        '06:17:00-09.15.2015>00:00:00-10:16:2015': 300,
      }
    }
  */

  protected $fillable = ['name', 'bookable_id', 'rates', 'min_period', 'hours', 'date_start', 'primary_image', 'owner', 'type', 'description', 'additional_images', 'status'];
}
