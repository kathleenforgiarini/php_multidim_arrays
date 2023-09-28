<?php
$studentHobbies = array ("Marc" => array("Tenis", "Soccer", "Dance"),
                         "Catherine" => array("Read", "Write", "Music", "Dive"),
                         "Luis" => array("Chess", "Swim", "Hockey", "Read", "Cook"));


displayStudentHobbies($studentHobbies);
$hobby = "Handball";
$studentWithSameHobby = studentWithTheSameHobby($studentHobbies, $hobby);

echo "The students who practice the hobby $hobby are ===> <br/>";
if (!empty($studentWithSameHobby))
    displayStudent($studentWithSameHobby);
else 
    echo "There is no student practicing the hobby $hobby";

    
function displayStudentHobbies($arr){
    foreach ($arr as $key=>$oneDim){
       echo "The hobbies of the person $key are ===> ";
        foreach ($oneDim as $val)
            echo "$val &nbsp&nbsp";
        echo"<hr/>";
    }
}

function studentWithTheSameHobby($arr, $hobby){
    $i=0;
    foreach ($arr as $key=>$oneDim) {
        if (in_array($hobby, $oneDim)){
            $students[$i++]=$key;
        }
    }
    if ($i>0){
        return $students;
    } else {
        return [];
    }
   
}

function displayStudent($arr){
    foreach ($arr as $value) {
        echo "$value <br/>";
    }
}


//scalar -> scalar
//scalar -> Associative
//Associative -> Scalar
//Associative -> Associative


































