<?php

namespace Adrhumphreys\GTFS;

use SilverStripe\Control\Controller;

class ApiController extends Controller
{
    private static $allowed_actions = [
        'hey'
    ];

    public function index()
    {
        return 'wow';
    }

    public function hey()
    {
        return 'ho';
    }
}