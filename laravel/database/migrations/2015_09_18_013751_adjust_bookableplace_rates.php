<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AdjustBookableplaceRates extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      // rates: json data
      /*
        {
          'default': [320.00, 'monthly']
          'default': [the default rate, period of time]
          '06:17:00-09.15.2015>00:00:00-10:16:2015': [300, 'monthly']
          'time-date>time-date': [rate, period of time]
          OR
          'monday': [monday rate]
          'march': [march rate]
        }
      */
      // hours: json data
      /*
        {
          'blocked': {
            'time-date>time-date': rate, *NULL IF NOT AVAIL*
            '06:17:00-09.15.2015>00:00:00-10:16:2015': 300,
            'march': null,
          }
        }
      */
        Schema::table('bookableplace', function (Blueprint $table) {
            // $table->integer('bookable_id');
            $table->json('rates');
            $table->string('min_period');
            $table->json('hours');
            $table->date('date_start');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('bookableplace', function (Blueprint $table) {
            $table->dropColumn(['rates', 'min_period', 'hours', 'date_start']);
        });
    }
}
