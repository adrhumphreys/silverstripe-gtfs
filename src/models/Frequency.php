<?php

namespace Adrhumphreys\GTFS;

use SilverStripe\ORM\DataObject;

/**
 * Class Frequency
 *
 * @property string TripID
 * @property string StartTime
 * @property string EndTime
 * @property string HeadwaySecs
 * @property int ExactTimes
 */
class Frequency extends DataObject
{
    private static $table_name = 'GTFS_Frequency';

    private static $db = [
        'TripID' => 'Varchar(200)',
        'StartTime' => 'Varchar',
        'EndTime' => 'Varchar',
        'HeadwaySecs' => 'Varchar',
        'ExactTimes' => 'Int',
    ];

    static function getTableName()
    {
        return self::$table_name;
    }
}