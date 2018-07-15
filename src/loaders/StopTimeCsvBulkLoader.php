<?php

namespace Adrhumphreys\GTFS;

use SilverStripe\Dev\CsvBulkLoader;

class StopTimeCsvBulkLoader extends CsvBulkLoader
{
    public $columnMap = [
        'trip_id' => 'TripID',
        'arrival_time' => 'ArrivalTime',
        'departure_time' => 'DepartureTime',
        'stop_id' => 'StopID',
        'stop_sequence' => 'Sequence',
        'stop_headsign' => 'HeadSign',
        'pickup_type' => 'PickupType',
        'drop_off_type' => 'DropOffType',
        'shape_dist_traveled' => 'ShapeDistTraveled',
        'timepoint' => 'TimePoint',
    ];
}