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
        <label for="firstName">Nome: </label><input type="text" name="firstName" id="firstName"><br>
        <label for="lastName">Cognome: </label><input type="text" name="lastName" id="lastName"><br>
        <label for="dateOfBirth">Anno di nascita: </label> <input type="date" name="dateOfBirth" id="dateOfBirth"> <br>
        <p style="margin:0;">Genere:</p> 
            <input type="radio" name="gender" id="genderM" value="Male">
            <label for="genderM">Male</label><br>
            <input type="radio" name="gender" id="genderF" value="Female">
            <label for="genderF">Female</label><br>
            <input type="radio" name="gender" id="genderO" value="Other">
            <label for="genderO">Other</label>
        <br>
        <label for="email">E-mail: </label> <input type="text" name="email" id="email"><br>
        <label for="city">City: </label> <input type="text" name="city" id="city"><br>
        <label for="country">Country: </label> <input type="text" name="country" id="country"><br>
        <button name="submit">submit</button>
    </form>
    <?php 
        //                                          echo "<br>php closing<br>";
        
        selectFrom($pdo,"PPL","ID,firstName,lastName,dateOfBirth,gender,email,city,country");
    ?>
</body>
</html>