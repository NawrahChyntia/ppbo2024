<?php
use App\Model\Akademik;

class Dosen extends Pegawai 
{
    public $nidn;

    public function __construct($nip, $nama, $no_hp, $alamat, $nidn)
    {
        parent::__construct($nip, $nama, $no_hp, $alamat);
        $this->nidn = $nidn;
    }

    public function mengajar(): void
    {
        echo "{$this->nama} sedang mengajar perkuliahan";
    }
}