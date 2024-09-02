<?php

date_default_timezone_set("Asia/Jakarta");
$nama = readline('Masukkan nama Anda: ');
$jam = date('H:i');

if ($jam >= 5 && $jam < 12) {
    echo "Selamat pagi, {$nama}!\n";
} elseif ($jam >= 12 && $jam < 15) {
    echo "Selamat siang, {$nama}!\n";
} elseif ($jam >= 15 && $jam < 19) {
    echo "Selamat sore, {$nama} sekarang jam $jam\n";
} else {
    echo "Selamat malam, {$nama} sekarang jam $jam\n";
}