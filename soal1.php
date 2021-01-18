<?php


$aplikasi[1] = "gtAkademik";
$aplikasi[2] = "gtFinansi";
$aplikasi[3] = "gtPerizinan";
$aplikasi[4] = "eCampuz";
$aplikasi[5] = "eOviz";

while($app = array_shift($aplikasi)){
    echo $app."<br>";
}