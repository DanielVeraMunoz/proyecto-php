<?php

class TeachingResource{
    private string $name;
    private Topic $topic;
    private string $url;
    private FileType $fileType;


public function __construct(string $name, Topic $topic, string $url, FileType $fileType)
{
    $this-> name= $name;
    $this->topic=$topic;
    $this->url=$url;
    $this->fileType=$fileType;
}


public function getName(){
    return $this->name;
}

public function getTopic(){
    return $this->topic;
}
public function getUrl(){
    return $this->url;
}
public function getFileType(){
    return $this->fileType;
}

public function __toString()
{
    return 
    "Name: " . $this->name . "\n" .
    "Topic: " . $this->topic->value . "\n" .
    "Url: " . $this->url . "\n" .
    "File type: " . $this->fileType->value;
    
}


}