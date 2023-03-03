<?php 
    echo "php starting...<br><br>";
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
</head>
<body>
    <h1>TRY OF SQL + PHP</h1>

    <form action="#" target="_self" method="post">
        <label for="name">NOME:</label><input type="text" name="name" id="name"><br>
        <label for="surname">COGNOME:</label><input type="text" name="surname" id="surname"><br>
        <input type="submit" value="submit" name="submit">
    </form>
    <?php
        
        //$statement = $pdo ->prepare("INSERT INTO ppl (firstName,lastName) VALUES ('Alessio','Petrotta');");
        statement($pdo,"firstName,lastName,age","Guido,Rossi,13");

        echo "<br>php closing<br>";
    ?>
</body>
</html>