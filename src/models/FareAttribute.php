<?php

namespace Adrhumphreys\GTFS;

use SilverStripe\ORM\DataObject;

/**
 * Class FareAttribute
 *
 * @property string FareID
 * @property string Price
 * @property string CurrencyType
 * @property int PaymentMethod
 * @property int Transfers
 * @property string AgencyID
 * @property int TransferDuration
 */
class FareAttribute extends DataObject
{
    private static $table_name = 'GTFS_FareAttribute';

    private static $db = [
        'FareID' => 'Varchar(200)',
        'Price' => 'Varchar',
        'CurrencyType' => 'Varchar',
        'PaymentMethod' => 'Int',
        'Transfers' => 'Int',
        'AgencyID' => 'Varchar',
        'TransferDuration' => 'Int'
    ];

    static function getTableName()
    {
        return self::$table_name;
    }
}