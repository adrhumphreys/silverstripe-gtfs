<?php

namespace Adrhumphreys\GTFS;

use SilverStripe\ORM\DataObject;

/**
 * Class FareRule
 *
 * @property string FareID
 * @property string RouteID
 * @property string OriginID
 * @property string DestinationID
 * @property string ContainsID
 */
class FareRule extends DataObject
{
    private static $table_name = 'GTFS_FareRule';

    private static $db = [
        'FareID' => 'Varchar(200)',
        'RouteID' => 'Varchar(200)',
        'OriginID' => 'Varchar(200)',
        'DestinationID' => 'Varchar(200)',
        'ContainsID' => 'Varchar(200)',
    ];

    static function getTableName()
    {
        return self::$table_name;
    }
}