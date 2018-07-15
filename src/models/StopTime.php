<?php

namespace Adrhumphreys\GTFS;

use SilverStripe\ORM\DataObject;

/**
 * Class StopTime
 *
 * @property string ArrivalTime
 * @property string DepartureTime
 * @property int Sequence
 * @property string HeadSign
 * @property int PickupType
 * @property int DropOffType
 * @property float ShapeDistTraveled
 * @property int TimePoint
 * @property int TripID
 * @property int StopID
 */
class StopTime extends DataObject
{
    private static $table_name = 'GTFS_StopTime';

    private static $db = [
        'StopID' => 'Time',
        'TripID' => 'Time',
        'ArrivalTime' => 'Time',
        'DepartureTime' => 'Time',
        'Sequence' => 'Int',
        'HeadSign' => 'Varchar(200)',
        'PickupType' => 'Int',
        'DropOffType' => 'Int',
        'ShapeDistTraveled' => 'Decimal',
        'TimePoint' => 'Int',
    ];

    private static $has_one = [
        'Trip' => Trip::class,
        'Stop' => Stop::class
    ];

    static function getTableName()
    {
        return self::$table_name;
    }
}