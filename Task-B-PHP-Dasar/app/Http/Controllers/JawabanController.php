<?php

namespace App\Http\Controllers;

class JawabanController extends Controller
{
    public function index()
    {
        for ($i = 1; $i <= 100; $i++) {
            if ($i % 3 == 0 && $i % 5 == 0) {
                echo $this->luasPersegiPanjang($i, $i) . "</br>";
            } else if ($i % 3 == 0) {
                echo $this->luasLingkaran($i) . "</br>";
            } elseif ($i % 5 == 0) {
                echo $this->kelilingLingkaran($i) . "</br>";
            } else {
                echo $i . "</br>";
            }
        }
    }

    public function luasLingkaran($jari)
    {
        $jari /= 3;
        $luas = 3.14 * $jari * $jari;
        return $luas;
    }

    public function kelilingLingkaran($jari)
    {
        $jari /= 5;
        $keliling = 2 * 3.14 * $jari;
        return $keliling;
    }

    public function luasPersegiPanjang($panjang, $lebar)
    {
        $panjang /= 3;
        $lebar /= 5;

        $luas = $panjang * $lebar;
        return $luas;
    }
}
