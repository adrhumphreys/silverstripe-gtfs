<?php

namespace Adrhumphreys\GTFS;

use SilverStripe\Dev\BuildTask;

class ImportGTFSTask extends BuildTask
{
    private static $segment = 'ImportGTFSTask';

    protected $title = 'Import GTFS task';

    protected $description = 'Imports the GTFS feed data from a zip source';

    /**
     * Implement this method in the task subclass to
     * execute via the TaskRunner
     *
     * @param \SilverStripe\Control\HTTPRequest $request
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function run($request)
    {
        (new GTFSImporter())->beginImport();
    }
}