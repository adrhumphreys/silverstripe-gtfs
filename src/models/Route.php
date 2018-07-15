<?php

namespace Adrhumphreys\GTFS;

use SilverStripe\ORM\DataObject;

/**
 * Class Route
 *
 * @property string AgencyID
 * @property string RouteID
 * @property string ShortName
 * @property string LongName
 * @property string Description
 * @property int Type
 * @property string Url
 * @property string Color
 * @property string TextColor
 * @property string SortOrder
 */
class Route extends DataObject
{
    private static $table_name = 'GTFS_Route';

    private static $db = [
        'RouteID' => 'Varchar(200)',
        'AgencyID' => 'Varchar(200)',
        'ShortName' => 'Varchar(200)',
        'LongName' => 'Varchar(200)',
        'Description' => 'Varchar(200)',
        'Type' => 'Int',
        'Url' => 'Varchar(200)',
        'Color' => 'Varchar(20)',
        'TextColor' => 'Varchar(20)',
        'SortOrder' => 'Varchar(200)'
    ];

    static function getTableName()
    {
        return self::$table_name;
    }
}