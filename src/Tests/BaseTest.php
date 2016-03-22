<?php

namespace Corcel\Tests;

use Illuminate\Database\Capsule\Manager as DB;
use PHPUnit_Framework_TestCase;

class BaseTest extends PHPUnit_Framework_TestCase
{
    protected function setUp()
    {
        parent::setUp();
        DB::connection()->getPdo()->beginTransaction();
    }

    protected function tearDown()
    {
        parent::tearDown();
        DB::connection()->getPdo()->rollBack();
    }
}