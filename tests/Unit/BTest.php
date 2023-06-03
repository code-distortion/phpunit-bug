<?php

namespace CodeDistortion\PhpUnitBug\Tests\Unit;

use PHPUnit\Framework\TestCase;

class BTest extends TestCase
{
    public static function test_something_b(): void
    {
        print "\n\"Running BTest::test_something_b()\"\n";

        self::assertTrue(true);
    }
}
