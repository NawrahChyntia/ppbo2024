<?php

class Lingkaran
{
    // ... kode kelas Lingkaran yang sudah ada
}

class Bola
{
    // ... kode kelas Bola yang sudah ada
}

class Tabung
{
    // ... kode kelas Tabung yang sudah ada
}

class Kerucut
{
    const PHI = 3.14;

    public function volume($jari_jari, $tinggi): float
    {
        return (1/3) * self::PHI * pow($jari_jari, 2) * $tinggi;
    }
}

// Membuat objek kerucut dengan nama nasi_tumpeng
$nasi_tumpeng = new Kerucut();

// Menghitung volume nasi tumpeng dengan jari-jari 4 cm dan tinggi 10 cm
$volume_nasi_tumpeng = $nasi_tumpeng->volume(4, 10);

// Menampilkan hasil ke layar
echo "Volume nasi tumpeng adalah: " . $volume_nasi_tumpeng . " cm³";