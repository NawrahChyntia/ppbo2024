<?php
namespace App\Model\Pustaka;

class Author {
    public $name;
    public $description;

    public function showType() {
        // Implementasi untuk menentukan jenis penulis
        // Misalnya, berdasarkan kategori buku yang ditulis
        return "Fiksi"; // Contoh pengembalian
    }
}
