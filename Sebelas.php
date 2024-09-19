<?php
require_once 'vendor/autoload.php';

use App\admin\Dosen;

// Buat objek $dian dari kelas Dosen
$dian = new Dosen(198411132015041001, "Dian Prawira", "62111111", "Jln Purnama", "0013118405");

// Panggil fungsi mengajar()
$dian->mengajar();