<?php

namespace Adrhumphreys\GTFS;

use SilverStripe\ORM\DataObject;

/**
 * Class Calendar
 *
 * @property string ServiceID
 * @property int Monday
 * @property int Tuesday
 * @property int Wednesday
 * @property int Thursday
 * @property int Friday
 * @property int Saturday
 * @property int Sunday
 * @property string StartDate
 * @property string EndDate
 */
class Calendar extends DataObject
{
    private static $table_name = 'GTFS_Calendar';

    private static $db = [
        'ServiceID' => 'Varchar(200)',
        'Monday' => 'Int',
        'Tuesday' => 'Int',
        'Wednesday' => 'Int',
        'Thursday' => 'Int',
        'Friday' => 'Int',
        'Saturday' => 'Int',
        'Sunday' => 'Int',
        'StartDate' => 'Date',
        'EndDate' => 'Date',
    ];

    static function getTableName()
    {
        return self::$table_name;
    }
}