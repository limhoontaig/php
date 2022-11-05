<?php
$date1 = date("Y-m-d H:i:s"); 
$date2 = new DateTime(); 
$date2_str = $date2->format("Y-m-d H:i:s");
echo "<br />";
var_dump($date1); echo "<br />";
var_dump($date2); echo "<br />";
var_dump($date2_str); echo "<br />";
echo "<br />";
$tomorrow = $date2->add(new DateInterval("P1D")); echo "<br />";
var_dump($tomorrow); echo "<br />";