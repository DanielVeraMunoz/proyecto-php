<?php

require_once "book.php";

class Library {
    private array $listOfBooks;

    public function __construct(){
        $this->listOfBooks=[];
    }


public function addBook(Book $book): void{
    $this->listOfBooks[] = $book;
}


public function findByAuthor(string $author): array{
    $listOfBooksByAuthor = [];
    foreach($this->listOfBooks as $book){
        if(strtolower($book->getAuthor()) === strtolower($author)){
        $listOfBooksByAuthor[] = $book;
        }
    }
    return $listOfBooksByAuthor;
}

public function findByTitle(string $title){
    $listOfBooksByTitle = [];
    foreach($this->listOfBooks as $book){
        if(strtolower($book->getTitle()) === strtolower($title)){
            $listOfBooksByTitle[] = $book;
        }
    }
    return $listOfBooksByTitle;
}

public function findByGenre(Genre $genre){
    $listOfBooksByGenre = [];
    foreach($this->listOfBooks as $book){
        if($book->getGenre() === $genre){
            $listOfBooksByGenre[] = $book;
        }
    }
    return $listOfBooksByGenre;
}

public function findByIsbn(string $isbn){
    $listOfBooksByIsbn = [];
    foreach($this->listOfBooks as $book){
        if(strtolower($book->getIsbn()) === strtolower($isbn)){
            $listOfBooksByIsbn[] = $book;
        }
    }
    return $listOfBooksByIsbn;
}

public function removeBookByIsbn(string $isbn): void{
    foreach ($this->listOfBooks as $key => $book) {
        if ($book->getIsbn() === $isbn) {
            unset($this->listOfBooks[$key]);
        }
    }
}

public function getBooks(): array{
    return $this->listOfBooks;
}

public function getLongestBooks(): array{
    $listOfLongestBooks = [];
    foreach($this->listOfBooks as $book){
        if($book->getPages() > 500){
            $listOfLongestBooks[] = $book;
        }
    }
    return $listOfLongestBooks;
}

}