<?php

namespace Adrhumphreys\GTFS;

use SilverStripe\ORM\DataObject;

/**
 * Class Shape
 *
 * @property string ShapeID
 * @property string PointLat
 * @property string PointLon
 * @property int PointSequence
 * @property string DistanceTraveled
 */
class Shape extends DataObject
{
    private static $table_name = 'GTFS_Shape';

    private static $db = [
        'ShapeID' => 'Varchar(200)',
        'PointLat' => 'Varchar',
        'PointLon' => 'Varchar',
        'PointSequence' => 'Int',
        'DistanceTraveled' => 'Varchar',
    ];

    static function getTableName()
    {
        return self::$table_name;
    }
}