<?php

$data2 = new DateTime();
$interval = new DateInterval('P5DT10H50M');
$data2->sub($interval);

echo $data2->format('d/m/Y H:i:s');