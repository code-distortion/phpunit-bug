<?php

namespace CodeDistortion\PhpUnitBug\Tests\PHPUnit;

use Orchestra\Testbench\TestCase as TestCase;
//use PHPUnit\Framework\TestCase;

class ATest extends TestCase
{
    public static function test_something_a(): void
    {
        dump('running ATest::test_something_a');
        self::assertTrue(true);
    }
}
