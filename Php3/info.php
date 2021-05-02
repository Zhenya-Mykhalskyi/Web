<?php

$number = $_POST["number"];
$date = $_POST["date"];
$who = $_POST["who"];


$numberPattern = "/^[a-zA-Z]{2}+[0-9]$/";
$datePattern = "/^[0-9]{2}+\.[0-9]{2}+\.[0-9]{4}$/";


if (preg_match($numberPattern, $number)) {
    echo "Номер паспорта введенний коректно! <br>";
} 
else {
    echo "Номер введенний не коректно! <br>";
}

if (preg_match($datePattern, $date)) {
    echo "Дата введенна коректно! <br>";
} 
else {
    echo "Дата введенна не коректно! <br>";
}

?>