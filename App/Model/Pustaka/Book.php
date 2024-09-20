<?php
namespace App\Model\Pustaka;

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