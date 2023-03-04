<?php 
    //echo "php starting...<br><br>";
    require_once "connect.php";
    include_once "library.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    table{width:100%;text-align:center;font-size:20px;}
    table, th, td{
        border:2px solid black;
    }
    td{text-align:start;}
    </style>
</head>
<body>
    <!--<h1>TRY OF SQL + PHP</h1>-->
    <form method="post" action="insert.php">
        <label for="firstName">NOME: </label><input type="text" name="firstName" id="firstName"><br>
        <label for="lastName">COGNOME: </label><input type="text" name="lastName" id="lastName"><br>
        <label for="age">ETA': </label> <input type="number" name="age" id="age"> <br>
        <button name="submit">submit</button>
    </form>
    <?php 
        //                                          echo "<br>php closing<br>";
        
        selectFrom($pdo,"ppl","firstName,lastName,age");
    ?>
</body>
</html>