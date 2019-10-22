<?
include "src/Dates/BirthDays.php"

$birthDate = "1966-02-05";(
$days = new \Ivliev\Dates\BirthDays($birthDate);
$totalDays = $days->findTotalDays()

echo "$birthDate : $totalDays\n";