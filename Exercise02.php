<?php

$cars = array ("Honda" => array ("Year" => 2008, "KLM" => 120000, "Price" => 9000, "Photo" => "images/car1.png"),
    "Toyota" => array ("Year" => 2010, "KLM" => 89000, "Price" => 10500, "Photo" => "images/car2.png"),
    "Cadillac" => array ("Year" => 2006, "KLM" => 95000, "Price" => 5600, "Photo" => "images/car3.png"),
    "Hyundai" => array ("Year" => 2011, "KLM" => 97000, "Price" => 8500, "Photo" => "images/car4.png")
);

displayCars($cars);

echo "========== After sorting the array ========== <br/>";
sortArrayAccordingToPrice($cars);
displayCars($cars);


echo "========== Display expensive car ========== <br/>";
$mostExpensiveCarName = key($cars);
$mostExpensiveCar = reset($cars);
displayCar($mostExpensiveCarName, $mostExpensiveCar);


function displayCar($carName, $carDetails) {
    echo "<div style='display:flex'>";
    echo "<div>";
    echo $carName . ' ' . $carDetails['Year'] . "<br/>";
    echo $carDetails['KLM'] . ' km,' . "<br/>";
    echo '$' . $carDetails['Price'];
    echo "</div>";
    echo "<div>";
    echo "<img src='" . $carDetails['Photo'] . "' width='100' height='100'>";
    echo "</div>";
    echo "</div>";
    echo "<hr/>";
}

function sortArrayAccordingToPrice (&$arr){
    uasort($arr, "sortByPrice");
}

function sortByPrice($el1, $el2) {
    if ($el1["Price"] == $el2["Price"]) {
        return 0;
    } elseif ($el1["Price"] > $el2["Price"]){
        return -1;
    }
    else {
        return 1;
    }
}

function displayCars ($arr){
    foreach ($arr as $key => $oneDim) {
        echo "<div style='display:flex'>";
        echo "<div>";
        echo $key . ' ' . $oneDim['Year'] . "<br/>";
        echo $oneDim['KLM'] . ' km,' . "<br/>";
        echo '$' . $oneDim['Price'];
        echo "</div>";
        echo "<div>";
        echo "<img src='" . $oneDim['Photo'] . "' width='100' height='100'>";
        echo "</div>";
        echo "</div>";
        echo "<hr/>";
    }
}

