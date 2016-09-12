<?php

//var_dump($_POST);

$path = 'data.txt';

if(isset($_POST['submit'])) {

    $cv = serialize($_POST)."\r\n";;


    file_put_contents($path, $cv, FILE_APPEND);
    header("Location: /");

}


