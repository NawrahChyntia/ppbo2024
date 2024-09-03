<?php

// Fungsi untuk menghitung luas lingkaran
function luasLingkaran($jari) : float {
    $luas = 3.14 * $jari * $jari;
    return $luas;
}

// Fungsi untuk menghitung keliling lingkaran
function kelilingLingkaran($jari) : float {
    $keliling = 2 * 3.14 * $jari;
    return $keliling;
}

// Fungsi untuk menghitung volume bola
function volumeBola($jari) : float {
    $volume = (4/3) * 3.14 * $jari * $jari * $jari;
    return $volume;
}

// Fungsi untuk menghitung volume tabung
function volumeTabung($jari, $tinggi) : float {
    $volume = 3.14 * $jari * $jari * $tinggi;
    return $volume;
}

// Fungsi untuk menghitung volume kerucut
function volumeKerucut($jari, $tinggi) : float {
    $volume = (1/3) * 3.14 * $jari * $jari * $tinggi;
    return $volume;
}

// Contoh penggunaan fungsi-fungsi tersebut
$jariLingkaran = 7;
$jariBola = 5;
$jariTabung = 3;
$tinggiTabung = 10;
$jariKerucut = 4;
$tinggiKerucut = 6;

echo "Keliling lingkaran dengan jari-jari $jariLingkaran adalah " . kelilingLingkaran($jariLingkaran) . "\n";
echo "Volume bola dengan jari-jari $jariBola adalah " . volumeBola($jariBola) . "\n";
echo "Volume tabung dengan jari-jari $jariTabung dan tinggi $tinggiTabung adalah " . volumeTabung($jariTabung, $tinggiTabung) . "\n";
echo "Volume kerucut dengan jari-jari $jariKerucut dan tinggi $tinggiKerucut adalah " . volumeKerucut($jariKerucut, $tinggiKerucut) . "\n";