<?php

namespace Adrhumphreys\GTFS;

use SilverStripe\ORM\DataObject;

/**
 * Class Trip
 *
 * @property string RouteID
 * @property string ServiceID
 * @property string HeadSign
 * @property string ShortName
 * @property int DirectionID
 * @property string BlockID
 * @property string ShapeID
 * @property int BikesAllowed
 * @property int WheelchairAccessible
 */
class Trip extends DataObject
{
    private static $table_name = 'GTFS_Trip';

    private static $db = [
        'RouteID' => 'Varchar(200)',
        'TripID' => 'Varchar(200)',
        'ServiceID' => 'Varchar(200)',
        'HeadSign' => 'Varchar(200)',
        'ShortName' => 'Varchar(200)',
        'DirectionID' => 'Int',
        'BlockID' => 'Varchar(200)',
        'ShapeID' => 'Varchar(200)',
        'BikesAllowed' => 'Int',
        'WheelchairAccessible' => 'Int',
    ];

    private static $has_many = [
        'StopTimes' => StopTime::class
    ];

    static function getTableName()
    {
        return self::$table_name;
    }
}