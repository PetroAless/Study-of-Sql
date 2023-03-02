<?php 
    function statement($pdoTmp, $columnS, $contents){ //insert into passing a pdo instance and strings for variables
        $sql = "INSERT INTO ppl $columnS VALUES (:contents)"; //$column is the name of the column it's gonna fill and contents
        $statement = $pdoTmp->prepare($sql);                   //is what is gonna go in
        //                                                                  fix?
        $statement->execute([
            ':contents' => $contents  //TO FIX!
            
        ]);
        
    }
?>