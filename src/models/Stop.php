<?php

namespace Adrhumphreys\GTFS;

use SilverStripe\ORM\DataObject;

/**
 * Class Stop
 *
 * @property string StopID
 * @property string Code
 * @property string Name
 * @property string PlatformCode
 * @property string Description
 * @property string Lat
 * @property string Lon
 * @property string ZoneID
 * @property string Url
 * @property int LocationType
 * @property int ParentStation
 * @property string Timezone
 * @property int WheelchairBoarding
 */
class Stop extends DataObject
{
    private static $table_name = 'GTFS_Stop';

    private static $db = [
        'StopID' => 'Varchar(200)',
        'Code' => 'Varchar(200)',
        'Name' => 'Varchar(200)',
        'Description' => 'Varchar(200)',
        'Lat' => 'Varchar(200)',
        'Lon' => 'Varchar(200)',
        'ZoneID' => 'Varchar(200)',
        'Url' => 'Varchar(200)',
        'LocationType' => 'Int',
        'ParentStation' => 'Int',
        'Timezone' => 'Varchar(200)',
        'WheelchairBoarding' => 'Int'
    ];

    private static $has_many = [
      'StopTimes' => StopTime::class
    ];

    static function getTableName()
    {
        return self::$table_name;
    }
}