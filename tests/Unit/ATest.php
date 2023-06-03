<?php

namespace CodeDistortion\PhpUnitBug\Tests\Unit;

use PHPUnit\Framework\TestCase;

class ATest extends TestCase
{
    public static function test_something_a(): void
    {
        set_error_handler([self::class, 'handleError']);

        print "\n\"Running ATest::test_something_a()\"\n";

        self::assertTrue(true);
    }

    public static function handleError(
        int $errno,
        string $errstr,
        string $errfile = '',
        int $errline = 0,
        array $errcontext = [],
    ): void {
        print "This won't be called";
    }
}
