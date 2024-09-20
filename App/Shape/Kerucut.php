<?php
namespace App\Shape;

class Kerucut
{
    public $jari_jari;
    public $tinggi;
    const PHI = 3.14;

    public function __construct($jari_jari,$tinggi) {
        $this->jari_jari = $jari_jari;
        $this->tinggi =$tinggi;
    }
   
    public function volume() : float {
        return (1/3)*self::PHI*pow($this->jari_jari,2)*$this->tinggi;
    }
}