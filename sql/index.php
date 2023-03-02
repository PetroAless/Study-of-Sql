<?php 
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
    <?php
        echo "php starting...<br>";
        //statement($pdo,"(firstName, lastName)","'Alessio', 'Petrotta'");
        //$statement = $pdo ->prepare("INSERT INTO ppl (firstName,lastName) VALUES ('Alessio','Petrotta');");
        
        
        
        statement($pdo,"firstName,lastName","Giulio,Giulini");
        

        //$statement ->execute([]);
        echo "php closing";
    ?>
    <form action="#" target="_self" method="post">
        <label for="name">NOME:</label><input type="text" name="name" id="name"><br>
        <label for="surname">COGNOME:</label><input type="text" name="surname" id="surname"><br>
        <input type="submit" value="submit" name="submit">
    </form>
</body>
</html>