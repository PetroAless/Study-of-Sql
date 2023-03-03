<?php 
    require_once "connect.php";
    require_once "library.php";
    $columns = 'firstName,lastName';
    $values = $_POST['name'].','.$_POST['surname'].','.$_POST['age'];
    $values = addSingleQuote($values);
    statement($pdo,"firstName,lastName,age",$values);
    echo "sending data";
    header("Location: index.php");
    exit();
?>