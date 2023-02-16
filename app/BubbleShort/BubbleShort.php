<?php

namespace Rizal\Algoritma\BubbleShort;


class BubbleShort
{
    public static function run(array $data): array
    {
        /**
         * Mendeteksi Angka dari depan
         * Misal [6,4,2,5,3,1]
         * Jika i= maka akan mendeteksi angka 6
         * Dalam bubble short kita akan melakukan compare pada node array yang saling berapit dari paling kiri
         * yang paling kecil akan dimasukan ke kiri dan yg besar di kanan (Asumsi ascending)
         * Misal [6,4,2,5,3,1] -> [4,6,2,5,3,1]
         * Untuk compare tentunya kita butuh 2 node paling kiri dan node setelahnya
         * Untuk deteksi node paling kiri kita menggunakan perulangan index i
         * Untuk deteksi node sebelah kananya kita melakukan perulangan dari kanan samping node i+1
         */
        $count = count($data);

        for ($i = 0; $i < $count; $i++) {
            for ($j = $count - 1; $j > $i; $j--) {

                // Data yang kanan lebih besar dari yang kiri
                // Maka tuker data yang kanan ke kiri dan kiri ke kanan
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
