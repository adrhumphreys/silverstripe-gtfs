<?php

namespace Adrhumphreys\GTFS;

use SilverStripe\Dev\CsvBulkLoader;

class FareAttributeCsvBulkLoader extends CsvBulkLoader
{
    public $columnMap = [
        'fare_id' => 'FareID',
        'price' => 'Price',
        'currency_type' => 'CurrencyType',
        'payment_method' => 'PaymentMethod',
        'transfers' => 'Transfers',
        'agency_id' => 'AgencyID',
        'transfer_duration' => 'TransferDuration'
    ];
}