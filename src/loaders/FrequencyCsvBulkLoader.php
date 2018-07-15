<?php

namespace Adrhumphreys\GTFS;

use SilverStripe\Dev\CsvBulkLoader;

class FrequencyCsvBulkLoader extends CsvBulkLoader
{
    public $columnMap = [
        'trip_id' => 'TripID',
        'start_time' => 'StartTime',
        'end_time' => 'EndTime',
        'headway_secs' => 'HeadwaySecs',
        'exact_times' => 'ExactTimes'
    ];
}