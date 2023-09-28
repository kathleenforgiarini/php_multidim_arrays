<?php
$statWeight = array (array(45,42,43),
                     array(77,78,79),
                     array(60,61,59,58));

displayAll($statWeight);
$maximum = getMax($statWeight);
displayMax($maximum);


function displayAll($arr){
    foreach ($arr as $oneDim) {
        foreach ($oneDim as $oneElem)
            echo "$oneElem &nbsp&nbsp";
            echo "<hr/>";
    }
}

function getMax($arr){
    $i=0;
    foreach ($arr as $oneDim) {
        sort($oneDim); $max[$i++]=end($oneDim);
    }
    return $max;
}

function displayMax($arr){
    echo "========== Display the maximum of each row ========== <br/>";
    foreach ($arr as $key=>$val) {
        echo "The maximum of the row $key is $val <br/>";
    }
}