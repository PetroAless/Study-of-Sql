<?php 
    require_once "connect.php";
    require_once "library.php";
    unset($_POST['submit']);
    $_POST['gender']=$_POST['gender'][0];

    $columns_values = fromPOSTtoStringS($_POST);
    $columns = $columns_values[0];
    $values = $columns_values[1];
    $values = addSingleQuote($values);
    statement($pdo,$columns,$values);
    
    echo "sending data";
    header("Location: index.php");
    exit();
?>