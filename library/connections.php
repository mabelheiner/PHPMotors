<?php

function phpmotorsConnect(){
$server = 'localhost';
$dbname = 'phpmotors';
$username = 'iClent';
$password = 'MxB3-XEwN8*1rPj!';
$dsn = "mysql:host=$server;dbname=$dbname";
$options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);

try{
    $link = new PDO($dsn, $username, $password, $options);
    if(is_object($link)){
        echo '';
    }
} catch(PDOException $e) {
    header("Location: ../view/500.php");
}
}
phpmotorsConnect();

?>