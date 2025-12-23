<?php

echo date('d/m/Y') . "<br>" . PHP_EOL;

$data = new DateTime();
echo "<pre>";
var_dump($data) . "<br>" . PHP_EOL;
echo "</pre>";

echo $data->format('d/m/Y') . "<br>" . PHP_EOL;