<?php

namespace Adrhumphreys\GTFS;

use SilverStripe\Dev\CsvBulkLoader;

class CalendarCsvBulkLoader extends CsvBulkLoader
{
    public $columnMap = [
        'service_id' => 'ServiceID',
        'monday' => 'Monday',
        'tuesday' => 'Tuesday',
        'wednesday' => 'Wednesday',
        'thursday' => 'Thursday',
        'friday' => 'Friday',
        'saturday' => 'Saturday',
        'sunday' => 'Sunday',
        'start_date' => '->parseStartDate',
        'end_date' => '->parseEndDate',
    ];

    public function parseStartDate(&$obj, $val, $record)
    {
        $date = date_parse_from_format('Ymd', $val);
        $obj->StartDate = $date['year'] . '-' . $date['month'] . '-' . $date['day'];
    }

    public function parseEndDate(&$obj, $val, $record)
    {
        $date = date_parse_from_format('Ymd', $val);
        $obj->EndDate = $date['year'] . '-' . $date['month'] . '-' . $date['day'];
    }

}