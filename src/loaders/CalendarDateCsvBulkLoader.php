<?php

namespace Adrhumphreys\GTFS;

use SilverStripe\Dev\CsvBulkLoader;

class CalendarDateCsvBulkLoader extends CsvBulkLoader
{
    public $columnMap = [
        'service_id' => 'ServiceID',
        'date' => '->parseDate',
        'exception_type' => 'ExceptionType'
    ];

    public function parseDate(&$obj, $val, $record)
    {
        $date = date_parse_from_format('Ymd', $val);
        $obj->Date = $date['year'] . '-' . $date['month'] . '-' . $date['day'];
    }

}