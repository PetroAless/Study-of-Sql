<?php 
    $host = 'localhost';
    $db = 'mydb';
    $username = 'root';
    $password = '';
    $connection = "mysql:host=$host;dbname=$db;charset=utf8";
    try{
        $pdo=new PDO($connection,$username,$password);
        $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        if($pdo)echo "Connection to the db: \"$db\" successful! <br>";
    }catch(PDOException $e){
        echo "errore di connessione:<br>";
        echo $e->getMessage();
    }
?>