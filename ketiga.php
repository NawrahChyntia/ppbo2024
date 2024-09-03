<?php

class Lingkaran
{
    const PHI = 3.14;

    public $jari_jari;

    public function __construct($jari_jari) {
        $this->jari_jari = $jari_jari;
    }

    public function luas() : float {
        return self::PHI * pow($this->jari_jari, 2);
    }

    public function keliling() : float {
        return 2 * self::PHI * $this->jari_jari;
    }
}

class Bola
{
    const PHI = 3.14;

    public $jari_jari;

    public function __construct($jari_jari) {
        $this->jari_jari = $jari_jari;
    }

    public function volume() : float {
        return (4/3) * self::PHI * pow($this->jari_jari, 3);
    }
}

class Tabung
{
    const PHI = 3.14;

    public $jari_jari;
    public $tinggi;

    public function __construct($jari_jari, $tinggi) {
        $this->jari_jari = $jari_jari;
        $this->tinggi = $tinggi;
    }

    public function volume() : float {
        return self::PHI * pow($this->jari_jari, 2) * $this->tinggi;
    }
}

class Kerucut
{
    const PHI = 3.14;

    public $jari_jari;
    public $tinggi;

    public function __construct($jari_jari, $tinggi) {
        $this->jari_jari = $jari_jari;
        $this->tinggi = $tinggi;
    }

    public function volume() : float {
        return (1/3) * self::PHI * pow($this->jari_jari, 2) * $this->tinggi;
    }
}

// Membuat objek lingkaran dengan jari-jari 5 cm
$lingkaran = new Lingkaran(5);
echo "Luas lingkaran: " . $lingkaran->luas() . " cm²" . PHP_EOL;
echo "Keliling lingkaran: " . $lingkaran->keliling() . " cm" . PHP_EOL;

// Membuat objek bola dengan jari-jari 3 cm
$bola = new Bola(3);
echo "Volume bola: " . $bola->volume() . " cm³" . PHP_EOL;

// Membuat objek tabung dengan jari-jari 2 cm dan tinggi 8 cm
$tabung = new Tabung(2, 8);
echo "Volume tabung: " . $tabung->volume() . " cm³" . PHP_EOL;

// Membuat objek kerucut dengan jari-jari 4 cm dan tinggi 10 cm
$kerucut = new Kerucut(4, 10);
echo "Volume kerucut: " . $kerucut->volume() . " cm³" . PHP_EOL;