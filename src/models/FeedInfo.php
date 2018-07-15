<?php

namespace Adrhumphreys\GTFS;

use SilverStripe\ORM\DataObject;

/**
 * Class FeedInfo
 *
 * @property string PublisherName
 * @property string PublisherUrl
 * @property string Lang
 * @property string StartDate
 * @property string EndDate
 * @property string Version
 */
class FeedInfo extends DataObject
{
    private static $table_name = 'GTFS_FeedInfo';

    private static $db = [
        'PublisherName' => 'Varchar(200)',
        'PublisherUrl' => 'Varchar(200)',
        'Language' => 'Varchar(200)',
        'StartDate' => 'Varchar(200)',
        'EndDate' => 'Varchar(200)',
        'Version' => 'Varchar(200)'
    ];

    static function getTableName()
    {
        return self::$table_name;
    }
}