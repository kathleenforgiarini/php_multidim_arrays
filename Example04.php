<?php
$studentInfo = array ("Marc" => array ("country" => "China", "Hobby" => "Soccer", "Age" => 24),
                    "Susan" => array ("country" => "Canada", "Job" => "Clerck", "Salary" => 2000, "Age" => 25),
                    "Karin" => array ("country" => "Egypt", "Hobby" => "Music", "Age" => 24, "Job" => "Programmer", "Salary" => "3000")
);


displayAllStudents($studentInfo);

$h = "Hobby";
displayStudentPerHobby($studentInfo, $h);

echo "=================== After increasing the salary =================== <br/>";
changeStudentSalary($studentInfo, 100);
displayAllStudents($studentInfo);

function changeStudentSalary (&$arr, $increase){ // & is to let the contents of the array change
    foreach ($arr as $key=>$oneDim){
        $salaryExists = array_key_exists("Salary", $oneDim);
        if ((!empty($salaryExists)))
            $arr[$key]["Salary"] = $arr[$key]["Salary"] + $increase;        
    }
}



function displayStudentPerHobby($arr,$hobby){
    foreach ($arr as $key=>$oneDim) {
        $hobbyExists = array_key_exists($hobby, $oneDim);
        if ((!empty($hobbyExists))){
            $stHobby = $arr[$key][$hobby];
            echo "The hobby of the student $key is $stHobby <br/>";
        }
    }
}

function displayAllStudents ($arr){
    foreach ($arr as $key=>$oneDim) {
        echo "The info of the student $key are ===> <br/>";
        foreach ($oneDim as $k=>$v) 
            echo "($k,$v)&nbsp&nbsp";
        echo "<hr/>";
    }
}

