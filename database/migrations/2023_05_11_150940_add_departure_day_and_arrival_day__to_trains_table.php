<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDepartureDayAndArrivalDayToTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('trains', function (Blueprint $table) {
            $table->date('departure_day')->after('arrival_station');
            $table->date('arrival_day')->after('departure_time');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */

    public function down()
    {
        Schema::table('trains', function (Blueprint $table) {
            $table->dropColumn('departure_day');
            $table->dropColumn('arrival_day');
        });
    }
}
