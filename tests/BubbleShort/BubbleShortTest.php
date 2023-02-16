<?php

namespace Rizal\Algoritma\BubbleShort;

use PHPUnit\Framework\TestCase;

class BubbleShortTest extends TestCase
{
    public function testBubbleShort()
    {
        $data = [6, 2, 4, 3, 1, 9, 12, 3, 3, 7, 2, 7, 1, 0, 2, 3, 6, 3];
        // [2,6,4,3,1,9]
        // [2,4,3,1,6,9] > Looping Sekali,
        // [2,3,1,4,6,9] > Harus Nested Loop untuk melakukan pengulangan selanjutnya
        $result = BubbleShort::run($data);
        self::assertNotEquals([6, 2, 4, 3, 1, 9, 12, 3, 3, 7, 2, 7, 1, 0, 2, 3, 6, 3], $result);
        // Data Harus Berurut
        self::assertEquals([0, 1, 1, 2, 2, 2, 3, 3, 3, 3, 3, 4, 6, 6, 7, 7, 9, 12], $result);
    }
}
