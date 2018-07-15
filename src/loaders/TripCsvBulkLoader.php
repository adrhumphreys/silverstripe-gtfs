<?php

namespace Adrhumphreys\GTFS;

use SilverStripe\Dev\CsvBulkLoader;

class TripCsvBulkLoader extends CsvBulkLoader
{
    public $columnMap = [
        'route_id' => 'RouteID',
        'service_id' => 'ServiceID',
        'trip_id' => 'TripID',
        'trip_headsign' => 'HeadSign',
        'trip_short_name' => 'ShortName',
        'direction_id' => 'DirectionID',
        'block_id' => 'BlockID',
        'shape_id' => 'ShapeID',
        'wheelchair_accessible' => 'BikesAllowed',
        'bikes_allowed' => 'WheelchairAccessible',
    ];
}