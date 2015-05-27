<?php
require 'csv.class.php';

$fileName = 'sample.csv';

$csvClass = new Csv();
$data = $csvClass->getCsvData( $fileName );

print_r($data);

