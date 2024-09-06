<?php
class Bola
{
    public $jari_jari;
    const PHI = 3.14;

    public function __construct($jari_jari) {
        $this->jari_jari=$jari_jari;
    }

    public function volume() : float {
        return (4/3)*self::PHI*pow($this->jari_jari,3);
    }
}