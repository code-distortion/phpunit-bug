<?php

namespace CodeDistortion\PhpUnitBug\Tests\PHPUnit;

//use Orchestra\Testbench\TestCase as TestCase;
use PHPUnit\Framework\TestCase;

class BTest extends TestCase
{
    public static function test_something_b(): void
    {
        dump('running BTest::test_something_b');
        self::assertTrue(true);
    }
}
