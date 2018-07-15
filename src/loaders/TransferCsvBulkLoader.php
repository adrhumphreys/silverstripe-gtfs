<?php

namespace Adrhumphreys\GTFS;

use SilverStripe\Dev\CsvBulkLoader;

class TransferCsvBulkLoader extends CsvBulkLoader
{
    public $columnMap = [
        'from_stop_id' => 'FromStopID',
        'to_stop_id' => 'ToStopID',
        'transfer_type' => 'TransferType',
        'min_transfer_time' => 'MinTransferTime'
    ];
}