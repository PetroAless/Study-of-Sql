<?php 
    require_once "connect.php";
    require_once "library.php";
    $columns = "firstName,lastName,age";
    $values = $_POST['name'].','.$_POST['surname'].','.$_POST['age'];
    $values = addSingleQuote($values);
    statement($pdo,$columns,$values);
    
    echo "sending data";
    header("Location: index.php");
    exit();
?>