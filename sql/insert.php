<?php 
    require_once "connect.php";
    require_once "library.php";
    $columns_values = fromPOSTtoString($_POST);
    $columns = $columns_values[0];
    $values = $columns_values[1];
    $values = $_POST['name'].','.$_POST['surname'].','.$_POST['age'];
    $values = addSingleQuote($values);
    statement($pdo,$columns,$values);
    
    echo "sending data";
    header("Location: index.php");
    exit();
?>