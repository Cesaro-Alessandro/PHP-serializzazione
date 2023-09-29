<?php
$path = getcwd() . '\input.yml';
$fileYaml = fopen($path, "r");
echo fread($fileYaml, filesize($path));
$test = fread($fileYaml, filesize($path));
fclose($fileYaml);


$test2 = json_encode($test);
$scrittura = fopen("risultato.json", "w");
fwrite($scrittura, $test2);
/*
y
$testino = yaml_parse_file(
    $path, 
    0
): mixed*/
echo (" \n $test2");
