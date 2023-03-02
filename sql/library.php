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
    function NplaceHolders($arr){
        return str_repeat("?, ",count($arr)-1)."?";
    }
    function statement($pdoTmp, $columnS, $contents ){ //insert into passing a pdo instance and strings for variables
        //$column is the name of the column it's gonna fill and contents is the fields
        $arrCont = fromStringToArrayOfStrings($contents);//create array of every single content of field
        $placeHolders=NplaceHolders($arrCont);//create a number of placeholders of the same length of arrCont
        //$arrColumn = fromStringToArrayOfStrings($columnS); not used, maybe in future
        $sql = "INSERT INTO ppl ($columnS) VALUES ($placeHolders);";
        $stm = $pdoTmp->prepare($sql);
        $stm -> execute($arrCont);
    }
?>