<?php

class TeachingResource{
    private string $name;
    private enum $topic;
    private string $url;
    private enum $fileType;


public function __construct($name, $topic, $url, $fileType)
{
    $this-> name= $name;
    $this->topic=$topic;
    $this->url=$url;
    $this->fileType->fileType;
}

}