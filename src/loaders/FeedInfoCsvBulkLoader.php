<?php

namespace Adrhumphreys\GTFS;

use SilverStripe\Dev\CsvBulkLoader;

class FeedInfoCsvBulkLoader extends CsvBulkLoader
{
    public $columnMap = [
        'feed_publisher_name' => 'PublisherName',
        'feed_publisher_url' => 'PublisherUrl',
        'feed_lang' => 'Language',
        'feed_start_date' => '->parseStartDate',
        'feed_end_date' => '->parseEndDate',
        'feed_version' => 'Version',
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