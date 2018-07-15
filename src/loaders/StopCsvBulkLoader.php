<?php

namespace Adrhumphreys\GTFS;

use SilverStripe\Dev\CsvBulkLoader;

class StopCsvBulkLoader extends CsvBulkLoader
{
    public $columnMap = [
        'stop_id' => 'StopID',
        'stop_code' => 'Code',
        'stop_name' => 'Name',
        'stop_desc' => 'Description',
        'stop_lat' => 'Lat',
        'stop_lon' => 'Lon',
        'zone_id' => 'ZoneID',
        'stop_url' => 'Url',
        'location_type' => 'LocationType',
        'parent_station' => 'ParentStation',
        'stop_timezone' => 'Timezone',
        'wheelchair_boarding' => 'WheelchairBoarding'
    ];
}