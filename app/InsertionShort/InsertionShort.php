<?php

namespace Rizal\Algoritma\InsertionShort;

class InsertionShort
{
    public static function run(array $data): array
    {
        $count = count($data);

        for ($i = 1; $i < $count; $i++) {
            for ($j = $i; $j > 0; $j--) {
                if ($data[$j] < $data[$j - 1]) {
                    $temp = $data[$j];
                    $data[$j] = $data[$j - 1];
                    $data[$j - 1] = $temp;
                }
            }
        }
        return $data;
    }
}
