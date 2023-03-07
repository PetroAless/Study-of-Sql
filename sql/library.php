<?php 
    function myPrintArray($arr){//print an array done by me
        for($i=0;isset($arr[$i]);$i++){
            echo $i.">".$arr[$i]."<br>";
        }
    }
    
    function fromStringToArrayOfStrings($string){//function that takes a string and divides it in many strings
        $j = 0;
        $strtemp = "";
        $strres = array();
        while($j<strlen($string)){ //simple loop j<of lenght of string
            if(!isset($string[$j])){ 
                echo "something wrong happened";
                break;
            }
            if(isset($string[$j])and $string[$j]!=',' and $string[$j]!=" "){ //check if the char exists and is not a ','
                $strtemp.=$string[$j]; //adds the char to the temp string containing a string to add to the result
            }
            
            if($string[$j]==","||!isset($string[$j+1])){ //check if the char is a ',' or if next char doesn't exist  
                $strres[]=$strtemp; //adds at the end of the array the string
                $strtemp = "";// reset of temp for new chars
            }
            $j++; //next char
        }
        return $strres; //return result array
    }
    function fromPOSTtoStringS($post){
        $res=array();//change all posts results to a string to put in db
        $res[0]="";
        $res[1]="";//set the elements to return
        $i = 0;
        foreach ($post as $key => $value) {
            if($i==count($post)-1){ //-1 to refer to the last element and not put another comma
                $res[0].=$key;
                $res[1].=$value;
                break;
            }else{
                $res[0].=$key.",";
                $res[1].=$value.",";
            }
            $i++;
        }
        return $res;
    }
    function checkContents($string){
        for ($i=0; $i <strlen($string) ; $i++) { 
            
        }
    }
    function addSingleQuote($string){ //from str to str with single quotes between elements;
        $res="";
        $tmp="'";
        for ($i=0; $i <strlen($string) ; $i++) { 
            if($string[$i]!=",")
                $tmp.=$string[$i];
            
            if(!isset($string[$i+1])){ 
                $res.=$tmp;
                break;
            }
            if($string[$i+1]==","){
                $tmp.="'";
                $res.=$tmp.",";
                $tmp="'";
            }
        }
        $res.="'";
        return $res;
    }
    function statement($pdoTmp,$tbl, $columnS, $contents ){ //insert into passing a pdo instance and strings for variables
        //$columnS is the name of the column it's gonna fill and contents is the fields
        $sql = "INSERT INTO $tbl ($columnS) VALUES ($contents);";
        $stm = $pdoTmp->prepare($sql);
        $stm -> execute();
    }
    function selectFrom($pdoTmp, $tbl, $columnS){//output of DATABASE!!
        echo "<h1>This is \"$tbl\" from your db</h1>";
        $sql = "SELECT $columnS FROM $tbl;";
        $stm = $pdoTmp->query($sql);
        $columnS = fromStringToArrayOfStrings($columnS);
        
        echo "<table>";
        echo "<tr>";
        for ($i=0; $i <  count($columnS) ; $i++) { 
            echo "<th>".$columnS[$i]."</th>";
        }
        echo "</tr>";
        foreach($stm as $row){
            echo "<tr>";
            for ($i=0; $i < count($columnS) ; $i++) { 
                echo "<td>";
                echo $row[$columnS[$i]]." ";
                echo "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }
?>