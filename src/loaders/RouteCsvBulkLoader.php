<?php

namespace Adrhumphreys\GTFS;

use SilverStripe\Dev\CsvBulkLoader;

class RouteCsvBulkLoader extends CsvBulkLoader
{
    public $columnMap = [
        'route_id' => 'RouteID',
        'agency_id' => 'AgencyID',
        'route_short_name' => 'ShortName',
        'route_long_name' => 'LongName',
        'route_desc' => 'Description',
        'route_type' => 'Type',
        'route_url' => 'Url',
        'route_color' => 'Color',
        'route_text_color' => 'TextColor',
        'route_sort_order' => 'SortOrder',
    ];
}