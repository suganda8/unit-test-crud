<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
// use Laravel\BrowserKitTesting\TestCase as BaseTestCase;

abstract class TestCaseLaravel extends BaseTestCase
{
    use CreatesApplication;

    // public $baseUrl = 'http://localhost:8000';
}
