<?php

namespace Adrhumphreys\GTFS;

use SilverStripe\ORM\DataObject;

/**
 * Class CalendarDate
 *
 * @property string ServiceID
 * @property string Date
 * @property int ExceptionType
 */
class CalendarDate extends DataObject
{
    private static $table_name = 'GTFS_CalendarDate';

    private static $db = [
        'ServiceID' => 'Varchar(200)',
        'Date' => 'Date',
        'ExceptionType' => 'Int',
    ];

    static function getTableName()
    {
        return self::$table_name;
    }
}