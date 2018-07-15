<?php

namespace Adrhumphreys\GTFS;

use SilverStripe\ORM\DataObject;

/**
 * Class Transfer
 *
 * @property string FromStopID
 * @property string ToStopID
 * @property int TransferType
 * @property string MinTransferTime
 */
class Transfer extends DataObject
{
    private static $table_name = 'GTFS_Transfer';

    private static $db = [
        'FromStopID' => 'Varchar(200)',
        'ToStopID' => 'Varchar(200)',
        'TransferType' => 'Int',
        'MinTransferTime' => 'Varchar'
    ];

    static function getTableName()
    {
        return self::$table_name;
    }
}