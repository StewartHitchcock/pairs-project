<?php

try{
    $db = new PDO("mysql:host=localhost;dbname=pairedproject", "root", "");
} catch (Exception $e){
    echo $e->getMessage();
}

?>