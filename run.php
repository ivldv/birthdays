#!/usr/bin/env php
<?
require_once "vendor/autoload.php";

$birthDate = "1966-02-05";
$days = new \Ivliev\Dates\BirthDays($birthDate);
$totalDays = $days->findTotalDays();

echo "$birthDate : $totalDays\n";