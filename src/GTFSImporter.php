<?php

namespace Adrhumphreys\GTFS;

use GuzzleHttp\Client;
use LogicException;
use SilverStripe\ORM\DB;
use ZipArchive;

class GTFSImporter
{
    const GTFS_LOCATION = 'https://cdn01.at.govt.nz/data/gtfs.zip';
    private $extractLocation = TEMP_FOLDER . DIRECTORY_SEPARATOR . 'gtfs';

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function beginImport()
    {
//        $this->getZip();
        $this->importAgencies();
        $this->importRoutes();
        $this->importTrips();
        $this->importStops();
        $this->importCalendars();
        $this->importCalendarDates();
        $this->importShapes();
        $this->importStopTimes();
    }

    /**
     * @return $this
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getZip()
    {
        $fileLocation = TEMP_FOLDER . DIRECTORY_SEPARATOR . 'gtfs.zip';
        $client = new Client();
        $client->request('GET', self::GTFS_LOCATION, ['sink' => $fileLocation]);
        $zip = new ZipArchive;
        $res = $zip->open($fileLocation);
        if ($res == TRUE) {
            $zip->extractTo($this->extractLocation);
            $zip->close();
        } else {
            throw new LogicException('Couldn\'t open the file');
        }
        return $this;
    }

    protected function importAgencies()
    {
        DB::get_conn()->clearTable(Agency::getTableName());
        $loader = new AgencyCsvBulkLoader(Agency::class);
        $loader->load($this->extractLocation . DIRECTORY_SEPARATOR . 'agency.txt');
    }

    protected function importRoutes()
    {
        DB::get_conn()->clearTable(Route::getTableName());
        $loader = new RouteCsvBulkLoader(Route::class);
        $loader->load($this->extractLocation . DIRECTORY_SEPARATOR . 'routes.txt');
    }

    protected function importTrips()
    {
        DB::get_conn()->clearTable(Trip::getTableName());
        $loader = new TripCsvBulkLoader(Trip::class);
        $loader->load($this->extractLocation . DIRECTORY_SEPARATOR . 'trips.txt');
    }

    protected function importStops()
    {
        DB::get_conn()->clearTable(Stop::getTableName());
        $loader = new StopCsvBulkLoader(Stop::class);
        $loader->load($this->extractLocation . DIRECTORY_SEPARATOR . 'stops.txt');
    }

    protected function importCalendars()
    {
        DB::get_conn()->clearTable(Calendar::getTableName());
        $loader = new CalendarCsvBulkLoader(Calendar::class);
        $loader->load($this->extractLocation . DIRECTORY_SEPARATOR . 'calendar.txt');
    }

    protected function importCalendarDates()
    {
        DB::get_conn()->clearTable(CalendarDate::getTableName());
        $loader = new CalendarDateCSVBulkLoader(CalendarDate::class);
        $loader->load($this->extractLocation . DIRECTORY_SEPARATOR . 'calendar_dates.txt');
    }

    protected function importShapes()
    {
        DB::get_conn()->clearTable(Shape::getTableName());
        $loader = new ShapeCsvBulkLoader(Shape::class);
        $loader->load($this->extractLocation . DIRECTORY_SEPARATOR . 'shapes.txt');
    }

    protected function importStopTimes()
    {
        DB::get_conn()->clearTable(StopTime::getTableName());
        $loader = new StopTimeCsvBulkLoader(StopTime::class);
        $loader->load($this->extractLocation . DIRECTORY_SEPARATOR . 'stop_times.txt');
    }
}