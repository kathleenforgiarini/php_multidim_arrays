<?php
$statWeight = array (
              array ("jan" => 45, "feb" => 42, "mar" => 43),
              array ("jun" => 77, "jul" => 78, "aug" => 79),
              array ("sep" => 60, "jan" => 61, "nov" => 59, "dec" => 58));

displayAll($statWeight);
$maximum = getMax($statWeight);
displayMax($maximum);

function displayAll($arr){
    foreach ($arr as $oneDim) {
        foreach ($oneDim as $key => $value)
            echo "The weight in the month $key is $value &nbsp&nbsp";
        echo "<hr/>";
    }
}

function getMax($arr){
    $i=0;
    foreach ($arr as $oneDim) {
        asort($oneDim);
        $value = end($oneDim);
        $key = key($oneDim);
        $max["$key-$i"] = $value;$i++;
    }
    return $max;
}

function displayMax($arr){
    $i=0;
    foreach ($arr as $key=>$val)
        echo "The maximum weight for the person in position ".$i++." corresponds to the month $key, and value $val <br/>";
}


















