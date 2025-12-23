<?php

$data = new DateTime();

$intervalo = new DateInterval('PT5M');
$data->add($intervalo);

echo "<pre>";
var_dump($data);
echo "</pre>";