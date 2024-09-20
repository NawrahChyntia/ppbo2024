<?php
namespace App\Shape;
class Tabung
{
    public $jari_jari;
    public $tinggi;

    public function __construct($jari_jari,$tinggi) {
        $this->jari_jari = $jari_jari;
        $this->tinggi =$tinggi;
    }
    
    const PHI = 3.14;
    public function volume() : float {
        return self::PHI*pow($this->jari_jari,2)*$this->tinggi;
    }
}