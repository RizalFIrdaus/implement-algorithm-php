<?php

namespace Rizal\Algoritma\InsertionShort;

use PHPUnit\Framework\TestCase;


class InsertionShortTest extends TestCase
{

    public function testInsertionTest()
    {
        $data = [6, 2, 4, 3, 1, 9, 12, 3, 3, 7, 2, 7, 1, 0, 2, 3, 6, 3];
        $result = InsertionShort::run($data);
        self::assertNotEquals([6, 2, 4, 3, 1, 9, 12, 3, 3, 7, 2, 7, 1, 0, 2, 3, 6, 3], $result);
        self::assertEquals([0, 1, 1, 2, 2, 2, 3, 3, 3, 3, 3, 4, 6, 6, 7, 7, 9, 12], $result);
    }
}
