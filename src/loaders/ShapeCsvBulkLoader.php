<?php

namespace Adrhumphreys\GTFS;

use SilverStripe\Dev\CsvBulkLoader;

class ShapeCsvBulkLoader extends CsvBulkLoader
{
    public $columnMap = [
        'shape_id' => 'ShapeID',
        'shape_pt_lat' => 'PointLat',
        'shape_pt_lon' => 'PointLon',
        'shape_pt_sequence' => 'PointSequence',
        'shape_dist_traveled' => 'DistanceTraveled'
    ];
}