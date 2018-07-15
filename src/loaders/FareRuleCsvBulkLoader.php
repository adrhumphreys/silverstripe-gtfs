<?php

namespace Adrhumphreys\GTFS;

use SilverStripe\Dev\CsvBulkLoader;

class FareRuleCsvBulkLoader extends CsvBulkLoader
{
    public $columnMap = [
        'fare_id' => 'FareID',
        'route_id' => 'RouteID',
        'origin_id' => 'OriginID',
        'destination_id' => 'DestinationID',
        'contains_id' => 'ContainsID'
    ];
}