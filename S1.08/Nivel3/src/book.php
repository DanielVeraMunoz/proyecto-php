<?php

require_once "Genre.php";

class Book {
    private string $title;
    private string $author;
    private string $isbn;
    private Genre $genre;
    private int $pages;

    public function __construct(string $title, string $author, string $isbn, Genre $genre, int $pages){
        
        $this->title=$title;
        $this->author=$author;
        $this->isbn=$isbn;
        $this->genre=$genre;
        $this->pages=$pages;
    }

    public function getPages(){
        return $this->pages;
    }

    public function getTitle(){
        return $this->title;
    }

    public function getIsbn(){
        return $this->isbn;
    }

    public function getGenre(){
        return $this->genre;
    }

    public function getAuthor(){
        return $this->author;
    }

}