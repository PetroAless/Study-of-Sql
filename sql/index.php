<?php 
    //echo "php starting...<br><br>";
    include_once "library.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--<h1>TRY OF SQL + PHP</h1>-->
    <?php 
        $columns = "";
        $values = "";
        $_POST['age']=$_POST['name']=$_POST['surname']="";
    ?>
    <form method="post" action="insert.php">
        <label for="name">NOME: </label><input type="text" name="name" id="name"><br>
        <label for="surname">COGNOME: </label><input type="text" name="surname" id="surname"><br>
        <label for="age">ETA': </label> <input type="number" name="age" id="age"> <br>
        <button name="submit">submit</button>
    </form>
    <?php 
        //echo "<br>php closing<br>";
    ?>
</body>
</html>