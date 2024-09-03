<?php

class Author {
    public $name;
    public $description;

    public function showType() {
        // Implementasi untuk menentukan jenis penulis
        // Misalnya, berdasarkan kategori buku yang ditulis
        return "Fiksi"; // Contoh pengembalian
    }
}

class Publisher {
    public $name;
    public $address;
    private $phone;

    public function __construct($name, $address, $phone) {
        $this->name = $name;
        $this->address = $address;
        $this->phone = $phone;
    }

    public function setPhone($phone) {
        $this->phone = $phone;
    }

    public function getPhone() {
        return $this->phone;
    }
}

class Book {
    public $ISBN;
    public $title;
    public $description;
    public $category;
    public $language;
    public $numberOfPage;
    public $author;
    public $publisher;

    public function __construct($ISBN, $title, $description, $category, $language, $numberOfPage, Author $author, Publisher $publisher) {
        $this->ISBN = $ISBN;
        $this->title = $title;
        // ... (isi atribut lainnya)
        $this->author = $author;
        $this->publisher = $publisher;
    }

    public function showAll() {
        // Mengembalikan semua informasi buku dalam bentuk array atau objek
        return [
            'ISBN' => $this->ISBN,
            'title' => $this->title,
            // ...
        ];
    }

    public function detail($ISBN) {
        // Mengembalikan detail buku berdasarkan ISBN
        if ($this->ISBN == $ISBN) {
            return $this->showAll();
        } else {
            return null;
        }
    }
}

// Contoh penggunaan
$author1 = new Author();
$author1->name = "J.K. Rowling";
$author1->description = "Penulis terkenal seri Harry Potter";

$publisher1 = new Publisher("Penerbit A", "Jakarta", "0211234567");

$book1 = new Book(12345, "Harry Potter and the Sorcerer's Stone", "Petualangan seorang anak penyihir", "Fantasi", "English", 309, $author1, $publisher1);

print_r($book1->showAll());