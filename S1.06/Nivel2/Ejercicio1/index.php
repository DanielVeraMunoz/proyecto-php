<?php

require_once "TeachingResource.php";
require_once "FileType.php";
require_once "Topic.php";


$teaching1 = new TeachingResource("Ejemplo",Topic::PHP,"http://google.es",FileType::VIDEO);


echo $teaching1;
