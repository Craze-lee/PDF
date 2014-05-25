<?php

header('Content-type:application/msword');
header('Content-Disposition:inline,filename=cert.rtf');


$filename = 'PHPCertification.rtf';
$fp = fopen($filename,'r');

$output = fread($fp,filesize($filename));

fclose($fp);

$name = 'liyong';
$score = 90;
$date = date('r');

$output = str_replace('<<NAME>>',strtoupper($name),$output);
$output = str_replace('<<Name>>',$name,$output);
$output = str_replace('<<score>>',$score,$output);
$output = str_replace('<<mm/dd/yyyy>>',$date,$output);

echo $output;
