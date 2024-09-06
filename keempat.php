<?php
require_once 'Author.php';
require_once 'Book.php';
require_once 'Publisher.php';

// Contoh penggunaan
$author1 = new Author();
$author1->name = "J.K. Rowling";
$author1->description = "Penulis terkenal seri Harry Potter";

$publisher1 = new Publisher("Penerbit A", "Jakarta", "0211234567");

$book1 = new Book(12345, "Harry Potter and the Sorcerer's Stone", "Petualangan seorang anak penyihir", "Fantasi", "English", 309, $author1, $publisher1);

print_r($book1->showAll());