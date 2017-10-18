<?php

// date

$date = new DateTime();
$today = $date->format('d-m-Y');

// seizoenen
$winter = new DateTime('December 21');
$spring = new DateTime('March 20');
$summer = new DateTime('June 20');
$autumn = new DateTime('September 22');

echo "De datum is: " . $today . "<br>";

switch(true) {
    case $date >= $winter && $date < $spring:
        echo 'Het is winter';
        break;
    case $date >= $spring && $date < $summer:
        echo 'Het is lente';
        break;
    case $date >= $summer && $date < $autumn:
        echo 'Het is zomer';
        break;
    default:
        echo 'Het is herfst';
}