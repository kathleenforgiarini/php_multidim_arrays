<?php

$points = array ("P0" => array ("X" => 100, "Y" => 120, "Z" => 50),
    "P1" => array ("X" => 200, "Y" => 150, "Z" => 80),
    "P2" => array ("X" => 300, "Y" => 100, "Z" => 100),
    "P3" => array ("X" => 200, "Y" => 80, "Z" => 400)
);

displayAllPoits($points);

echo "========== After sorting the array ========== <br/>";
sortArrayAccordingToCoordinateZ($points);
displayAllPoits($points);


echo "========== Display the point (x,y,z) that corresponds to the higest value of Z ========== <br/>";
$highestZPoint = reset($points);
echo "Point with the highest Z value: (X = " . $highestZPoint["X"] . ", Y = " . $highestZPoint["Y"] . ", Z = " . $highestZPoint["Z"] . ")";



function sortArrayAccordingToCoordinateZ (&$arr){
    uasort($arr, "sortByCoordinateZ");
}

function sortByCoordinateZ($el1, $el2) {
    if ($el1["Z"] == $el2["Z"]) {
        return 0;
    } elseif ($el1["Z"] > $el2["Z"]){
        return -1;
    }
    else {
        return 1;
    }
}

function displayAllPoits ($arr){
    foreach ($arr as $key=>$oneDim) {
        echo "The coordinates for the point $key are ===> <br/>";
        foreach ($oneDim as $k=>$v)
            echo "($k,$v)&nbsp&nbsp";
            echo "<hr/>";
    }
}
