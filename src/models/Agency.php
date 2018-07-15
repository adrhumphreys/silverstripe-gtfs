<?php

namespace Adrhumphreys\GTFS;

use SilverStripe\ORM\DataObject;

/**
 * Class Agency
 *
 * @property string Url
 * @property string Language
 * @property string Name
 * @property string Phone
 * @property string Timezone
 * @property string FareUrl
 * @property string Email
 */
class Agency extends DataObject
{
    private static $table_name = 'GTFS_Agency';

    private static $db = [
        'AgencyID' => 'Varchar(250)',
        'Url' => 'Varchar(250)',
        'Language' => 'Varchar(250)',
        'Name' => 'Varchar(250)',
        'Phone' => 'Varchar(250)',
        'Timezone' => 'Varchar(250)',
        'FareUrl' => 'Varchar(250)',
        'Email' => 'Varchar(250)'
    ];

    static function getTableName()
    {
        return self::$table_name;
    }
}