<?php

namespace Adrhumphreys\GTFS;

use SilverStripe\Dev\CsvBulkLoader;

class AgencyCsvBulkLoader extends CsvBulkLoader
{
    public $columnMap = [
        'agency_id' => 'AgencyID',
        'agency_name' => 'Name',
        'agency_url' => 'Url',
        'agency_timezone' => 'Timezone',
        'agency_lang' => 'Language',
        'agency_phone' => 'Phone',
        'agency_fare_url' => 'FareUrl',
        'agency_email' => 'Email',
    ];
}